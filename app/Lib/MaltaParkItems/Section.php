<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 30/10/2015
 * Time: 14:56
 */

namespace App\Lib\MaltaParkItems;


class Section
{
	public $id;
	public $description;

	public function __construct($id,$description)
	{
		$this->id = $id;
		$this->description = $description;
	}
}