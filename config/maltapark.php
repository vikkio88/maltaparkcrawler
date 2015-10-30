<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:57
 */

return [
	//Url
	'url' => 'http://www.maltapark.com',
	'pageListCategory' => '/listings.aspx?category=',

	//Url helper
	'pageNum' => '&page=',

	//RegExps
	'categoryRegexp' => '/listings\.aspx\?category=(\d+).+span>(.+?)<\/a>/',
	'idForListItem' => '/<a href="\/item.aspx\?ItemID=(\d+?)"/',
	'imgForListItem' => '/<img alt="item" id="p" src="(.+?)"/',
	'priceForListItem' => '/<span class="text">(.*?)<\/span>/',
	'titleForListItem' => '/<div class="title"><a href=".+">(.+?)<\/a>/',
	'dateForListItem'=> '/"added">(.+?)<\//'
];