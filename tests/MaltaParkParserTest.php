<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MaltaParkParserTest extends TestCase
{
    /**
     *
     * @group Sections
     *
     */
    public function testGetSectionsFromNet()
    {
        $sections = App\Lib\MaltaParkParser::getSectionsFromNet();
        $this->assertTrue(!empty($sections));
    }

    /**
     * @group ListItem
     * Tests the api edit form
     */
    public function testGetListItemForSectionFromNet()
    {
        $sectionId = 2;
        $items = App\Lib\MaltaParkParser::getItemListForSectionFromNet($sectionId);
        print_r($items);
        $this->assertTrue(!empty($items));

    }

    /**
     * @group ItemDetails
     * Tests the api edit form
     */
    public function testGetItemDetails()
    {
        $itemId = 4725038;
        $item = App\Lib\MaltaParkParser::getItemDetailFromNet($itemId);
        print_r($item);
        $this->assertTrue(!empty($item));

    }

    /**
     * @group TextParsing
     * Tests the api edit form
     */
    public function testFormatCurrency(){
        $sectionId = 2;
        $items = App\Lib\MaltaParkParser::getItemListForSectionFromNet($sectionId);

        foreach($items as $item){
            echo "\nBefore: ";
            echo $item->price;
            echo "\nAfter: ";
            echo \App\Lib\Helpers\TextFormatter::currencyStringToFloat($item->price);
        }
    }

}
