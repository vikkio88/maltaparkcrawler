<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MaltaParkParserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
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



    public function testGenerateTable()
    {
        //$this->assertTrue(empty(\App\Sections::all()));
        /*
        \App\Sections::refresh();
        $this->assertTrue(!empty(\App\Sections::all()));
        */
    }
}
