<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SectionParserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetFromNet()
    {
        $sections = App\Lib\SectionParser::getSectionsFromNet();
        $this->assertTrue(!empty($sections));
    }

    public function testGenerateTable()
    {
        //$this->assertTrue(empty(\App\Sections::all()));
        \App\Sections::refresh();
        $this->assertTrue(!empty(\App\Sections::all()));
    }
}
