<?php

namespace App\Api\V1\Controllers;

use App\Lib\MaltaParkParser;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SectionsController extends Controller
{
	/**
	 * Display a listing of the Sections.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getAll()
	{
			return response()
					->json(
							MaltaParkParser::getSectionsFromNet()
					);
	}

	public function getItemsBySectionId($sectionId)
	{
		$pageNum = Input::get("p",1);
		return response()
				->json(
						MaltaParkParser::getItemListForSectionFromNet($sectionId,$pageNum)
				);
	}



	/**
	 * Refresh from Remote the sections
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function refresh()
	{
		return response()
			->json(
				Sections::refresh()
			);
	}

}
