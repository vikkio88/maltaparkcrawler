<?php

namespace App\Api\V1\Controllers;

use App\Lib\MaltaParkParser;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
	public function getOne($itemId)
	{
		return response()
			->json(
				MaltaParkParser::getItemDetailFromNet($itemId)
			);
	}
}
