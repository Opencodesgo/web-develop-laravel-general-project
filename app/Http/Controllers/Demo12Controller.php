<?php
/**
 * App, Http, 控制器, Demo12，通用
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo12Controller extends BaseController {
	
	public function index() {
		echo 'demo01 index';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
    
}
