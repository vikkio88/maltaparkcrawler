<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.ciaccio
 * Date: 30/10/2015
 * Time: 11:48
 */

namespace App\Lib\Helpers;


class Dom
{
	public static function getHtml($node) {
		$innerHTML= '';
		$children = $node->childNodes;
		foreach ($children as $child) {
			$innerHTML .= $child->ownerDocument->saveXML( $child );
		}
		return $innerHTML;
	}

}