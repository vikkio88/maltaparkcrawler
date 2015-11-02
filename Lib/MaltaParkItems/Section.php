<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 30/10/2015
 * Time: 14:56
 */

namespace App\Lib\MaltaParkItems;


/**
 * Class Section
 * @package App\Lib\MaltaParkItems
 */
class Section
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $description;

    /**
     * @param $id
     * @param $description
     */
    public function __construct($id,$description)
	{
		$this->id = $id;
		$this->description = $description;
	}
}