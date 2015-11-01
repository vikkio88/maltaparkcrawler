<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:51
 */

namespace App\Lib;


use App\Lib\MaltaParkItems\ItemDetail;
use App\Lib\MaltaParkItems\ListItem;
use App\Lib\Helpers;
use App\Lib\MaltaParkItems\Section;
use App\Lib\Helpers\Config;
use Goutte\Client;

class MaltaParkParser
{
	static function getItemDetailFromNet($itemId)
	{
		$url = Config::get('maltapark.url') .
			Config::get('maltapark.pageItemDetail') .
			$itemId;

		$client = new Client();
		$crawler = $client->request(
			'GET',
			$url
		);
		$itemDetail = null;
		foreach ($crawler->filter('.detailwrap') as $node) {
			$itemDetail = new ItemDetail(Helpers\Dom::getHtml($node),$itemId);
		}
		return $itemDetail;
	}

	static function getItemListForSectionFromNet($sectionId, $pageNum = 1)
	{
		$url = Config::get('maltapark.url') .
			Config::get('maltapark.pageListCategory') .
			$sectionId .
			Config::get('maltapark.pageNum') .
			$pageNum;

		$client = new Client();
		$items = [];
		$crawler = $client->request(
			'GET',
			$url
		);

		foreach ($crawler->filter('#item_list') as $node) {
			$item = new ListItem(Helpers\Dom::getHtml($node));
			$items[] = $item;
		}
		return $items;
	}

	static function getSectionsFromNet()
	{
		$sections = [];
		$contents = file_get_contents(Config::get('maltapark.url'));
		if (!$contents) return [];
		$matches = Helpers\RegExp::getAllMatch(Config::get('maltapark.categoryRegexp'), $contents);
		for ($i = 0; $i < count($matches[1]); $i++) {
			$sections[] = new Section($matches[1][$i],$matches[2][$i]);
		}
		return $sections;
	}

}