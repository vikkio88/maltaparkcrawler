<?php

namespace App\Lib\MaltaParkItems;

/**
 * Class Item
 * @package App\Lib\MaltaParkItems
 */
abstract class Item
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $img_url;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $price;
    /**
     * @var
     */
    public $price_val;
}
