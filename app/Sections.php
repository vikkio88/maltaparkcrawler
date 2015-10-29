<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;


class Sections extends Model
{
	protected $table = 'sections';
	protected $hidden =[
		'created_at'
	];

    public static function refresh(){
		DB::table('sections')->delete();
		$sections = \App\Lib\MaltaParkParser::getSectionsFromNet();
		foreach($sections as $s_id => $s_desc){
			DB::table('sections')->insert(
				array(
					'id' => $s_id ,
					'description' => $s_desc,
					'created_at' => Carbon::now()
				)
			);
		}

		return true;
	}
}
