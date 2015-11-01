<?php

return [
	//Url
	'url' => 'http://www.maltapark.com',
	'pageListCategory' => '/listings.aspx?category=',
	'pageItemDetail' => '/item.aspx?ItemID=',

	//Url helper
	'pageNum' => '&page=',
	'detailImgUrl' => '/dothumbnail.ashx?',
	'contactImgUrl' => '/tti.ashx?',

	//RegExps
	'categoryRegexp' => '/listings\.aspx\?category=(\d+).+span>(.+?)<\/a>/',
	'idForListItem' => '/<a href="\/item.aspx\?ItemID=(\d+?)"/',
	'imgForListItem' => '/<img alt="item" id="p" src="(.+?)"/',
	'priceForListItem' => '/<span class="text">(.*?)<\/span>/',
	'titleForListItem' => '/<div class="title"><a href=".+">(.+?)<\/a>/',
	'dateForListItem'=> '/"added">(.+?)<\//',

	'titleForItemDetail' => '/"title">(.+?)<\/div/',
	'priceForItemDetail' => '/"price">(.+?)<span/',
	'imgForItemDetail' => '/dothumbnail\.ashx\?(.+?)"/',
	'topDetailForItemDetail' => ':<\/label>(.+?)<\/li/',
	'contactForItemDetail' => '/<img src="tti.ashx\?(.+?)"/',
	'descriptionForItemDetail' => '/Description<\/h2>\n(.+?)\n/', //remember to clean output

];