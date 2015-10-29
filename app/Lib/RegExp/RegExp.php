<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 29/10/2015
 * Time: 16:58
 */

namespace App\Lib;


class RegExp
{
	public static function getFirstMatch($regexp,$target){
		preg_match_all($regexp,$target, $matches);
		return $matches[1][0];
	}

}