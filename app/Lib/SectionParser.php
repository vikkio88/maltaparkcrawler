<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 12:51
 */

namespace App\Lib;


use Illuminate\Support\Facades\Config;

class SectionParser
{

	static function getSectionsFromNet()
	{
		$sections = [];

		$contents = file_get_contents(Config::get('maltapark.url'));
		if (!$contents) return [];

		preg_match_all(Config::get('maltapark.regexp'), $contents, $matches);

		for ($i = 0; $i < count($matches[1]); $i++) {
			$sections[$matches[1][$i]] = $matches[2][$i];
		}

		return $sections;
	}

}