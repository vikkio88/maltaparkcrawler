<?php

namespace App\Lib;

use App\Lib\Helpers\Config;
use \App\Lib\Helpers\FakeBrowser;


/**
 * Class KeepMePostedGateway
 * @package App\Lib
 */
class KeepMePostedGateway
{


	/**
	 * @param int $pageNum
	 * @return string
	 */
	public static function getJobs($pageNum = 1){

		return FakeBrowser::get(
			Config::get('keepmeposted.url').
			Config::get('keepmeposted.jobsApi').
			Config::get('keepmeposted.pageNum').$pageNum.
			Config::get('keepmeposted.fixedCategories')
		);

	}

}