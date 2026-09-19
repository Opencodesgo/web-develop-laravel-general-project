<?php
/**
 * App, Http, 控制器, Demo01，通用
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo08Controller extends BaseController {
	
	public function index() {
		echo 'demo08 index';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
    
}
