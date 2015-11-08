<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:51
 */

namespace App\Lib;


use App\Lib\MaltaParkItems\ItemDetail;
use App\Lib\MaltaParkItems\ListItem;
use App\Lib\Helpers;
use App\Lib\MaltaParkItems\Section;
use App\Lib\Helpers\Config;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class MaltaParkParser
 * @package App\Lib
 */
class MaltaParkParser
{
    /**
     * @param $itemId
     * @return ItemDetail|null
     */
    static function getItemDetailFromNet($itemId)
    {
        $url = Config::get('maltapark.url') .
            Config::get('maltapark.pageItemDetail') .
            $itemId;

        $content = Helpers\FakeBrowser::get($url);
        $crawler = new Crawler(null, $url);
        $crawler->addContent($content, "text/html");

        $itemDetail = null;
        foreach ($crawler->filter('.detailwrap') as $node) {
            $itemDetail = new ItemDetail(Helpers\Dom::getHtml($node), $itemId);
        }
        return $itemDetail;
    }

    /**
     * @param $sectionId
     * @param int $pageNum
     * @return array
     */
    static function getItemListForSectionFromNet($sectionId, $pageNum = 1)
    {
        $url = Config::get('maltapark.url') .
            Config::get('maltapark.pageListCategory') .
            $sectionId .
            Config::get('maltapark.pageNum') .
            $pageNum;

        $content = Helpers\FakeBrowser::get($url);
        $items = [];
        $crawler = new Crawler(null, $url);
        $crawler->addContent($content, "text/html");
        foreach ($crawler->filter('#item_list') as $node) {
            $item = new ListItem(Helpers\Dom::getHtml($node));
            $items[] = $item;
        }
        return $items;
    }

    /**
     * @return array
     */
    static function getSectionsFromNet()
    {
        $sections = [];
        $contents = Helpers\FakeBrowser::get(Config::get('maltapark.url'));
        if (!$contents) return [];
        $matches = Helpers\RegExp::getAllMatch(Config::get('maltapark.categoryRegexp'), $contents);
        for ($i = 0; $i < count($matches[1]); $i++) {
            $sections[] = new Section($matches[1][$i], $matches[2][$i]);
        }
        return $sections;
    }

    /**
     * @param string $query
     * @param int $pageNum
     * @return array
     */
    public static function searchFromNet($query = "", $pageNum = 1)
    {
        if (empty($query)) {
            return [];
        }

        $url = Config::get('maltapark.url') .
            Config::get('maltapark.pageSearch') .
            $query .
            Config::get('maltapark.pageNum') .
            $pageNum;

        $content = Helpers\FakeBrowser::get($url);
        $items = [];
        $crawler = new Crawler(null, $url);
        $crawler->addContent($content, "text/html");
        foreach ($crawler->filter('#item_list') as $node) {
            $item = new ListItem(Helpers\Dom::getHtml($node));
            $items[] = $item;
        }
        return $items;
    }
}