<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 16:12
 */

namespace App\Lib\MaltaParkItems;

use App\Lib\Helpers;
use App\Lib\Helpers\Config;


/**
 * Class ListItem
 * @package App\Lib\MaltaParkItems
 */
class ListItem extends Item
{
    /**
     * @var null
     */
    public $date;

    /**
     * @param $elementHtml
     */
    public function __construct($elementHtml)
	{
		$this->id = Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.idForListItem'),
			$elementHtml
		);

		$this->img_url = Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.imgForListItem'),
			$elementHtml
		);
		$this->title = strip_tags(
            Helpers\RegExp::getFirstMatch(
			    Config::get('maltapark.titleForListItem'),
			    $elementHtml
		    )
        );
		$this->price = Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.priceForListItem'),
			$elementHtml
		);
		$this->price_val = Helpers\TextFormatter::currencyStringToFloat($this->price);
		$this->date = Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.dateForListItem'),
			$elementHtml
		);
	}

}