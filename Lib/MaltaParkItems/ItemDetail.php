<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 16:13
 */

namespace App\Lib\MaltaParkItems;

use App\Lib\Helpers;
use Illuminate\Support\Facades\Config;


class ItemDetail extends Item
{
	private $topDetailsLabel = [
		'category' => '/Category',
		'condition' => '/Condition',
		'seller' => '/Seller',
		'listed_on' => '/Listed On',
		'ends_on' => '/Ends On',
		'views' => '/Views'
	];

	// Top Details
	public $listed_on;
	public $ends_on;
	public $seller;
	public $category;
	public $condition;
	public $views;
	// top details

	public $contact;
	public $description;

	public function __construct($elementHtml, $itemId)
	{
		$this->id = $itemId;

		$this->img_url = Config::get('maltapark.detailImgUrl');
		$this->img_url .= Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.imgForItemDetail'),
			$elementHtml
		);

		$this->title = strip_tags(
            Helpers\RegExp::getFirstMatch(
			    Config::get('maltapark.titleForItemDetail'),
			    $elementHtml
		    )
        );
		$this->price = Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.priceForItemDetail'),
			$elementHtml
		);
		$this->price_val = Helpers\TextFormatter::currencyStringToFloat($this->price);

		$this->contact = Config::get('maltapark.contactImgUrl');
		$this->contact .= Helpers\RegExp::getFirstMatch(
			Config::get('maltapark.contactForItemDetail'),
			$elementHtml
		);

		$this->description = strip_tags(
				Helpers\RegExp::getFirstMatch(
				Config::get('maltapark.descriptionForItemDetail'),
				$elementHtml
				)
		);

		foreach($this->topDetailsLabel as $lblKey => $lblRegex){
			$this->$lblKey = Helpers\RegExp::getFirstMatch(
					$lblRegex . Config::get('maltapark.topDetailForItemDetail'),
					$elementHtml
			);
		}
	}
}