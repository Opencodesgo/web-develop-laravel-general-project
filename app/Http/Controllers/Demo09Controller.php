<?php
/**
 * App, Http, 控制器, Demo01，通用
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo09Controller extends BaseController {
	
	public function index() {
		echo 'demo09 index';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
    
}
