<?php
/**
 * Created by PhpStorm.
 * User: vikkio88
 * Date: 01/11/2015
 * Time: 21:22
 */

namespace App\Lib\Helpers;


class Config {

    public static function get($key){
        $exp = explode(".",$key);
        echo "config/".$exp[0].".php";
        $conf = unserialize(file_get_contents(("config/".$exp[0].".php")));
        $val = $conf[$exp[1]];
        return $val;
    }

} 