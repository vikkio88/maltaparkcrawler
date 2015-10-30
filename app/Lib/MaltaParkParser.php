<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:51
 */

namespace App\Lib;


use App\Lib\MaltaParkItems\ListItem;
use App\Lib\Helpers;
use Illuminate\Support\Facades\Config;
use Goutte\Client;

class MaltaParkParser
{

	static function getItemListForSectionFromNet($sectionId, $pageNum = 1)
	{
		$url = 	Config::get('maltapark.url') .
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

		preg_match_all(Config::get('maltapark.categoryRegexp'), $contents, $matches);

		for ($i = 0; $i < count($matches[1]); $i++) {
			$sections[$matches[1][$i]] = $matches[2][$i];
		}

		return $sections;
	}

}