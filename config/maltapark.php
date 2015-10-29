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

	//RegExps
	'categoryRegexp' => '/listings\.aspx\?category=(\d+).+span>(.+?)<\/a>/',
	'imgForListItem' => '/<img alt="item" id="p" src="(.+?)"/',
	'titleForListItem' => '/<div class="title"><a href=".+">(.+?)<\/a>/',
];