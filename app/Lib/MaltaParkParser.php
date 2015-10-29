<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:51
 */

namespace App\Lib;


use App\Lib\MaltaParkItem\ListItem;
use Illuminate\Support\Facades\Config;
use Goutte\Client;

class MaltaParkParser
{

	static function getItemListForSectionFromNet($sectionId)
	{
		$client = new Client();
		$items = [];
		$crawler = $client->request('GET', Config::get('maltapark.url') . Config::get('maltapark.pageListCategory'). $sectionId);
		$crawler->filter('#item_list')->each(function ($node) {

			$item = new ListItem();

			$item->img_url =  RegExp::getFirstMatch(Config::get('maltapark.imgForListItem'), $node->html());

			$item->title = RegExp::getFirstMatch(Config::get('maltapark.titleForListItem'), $node->html());

			$items[] = $item;
			/*
			$node->filter('div.img')->each(
					function($img_node){
						echo $img_node->html();
					}
			);
			*/
		});

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