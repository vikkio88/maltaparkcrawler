<?php

namespace App\Api\V1\Controllers;

use App\Sections;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

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
				Sections::all()
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
