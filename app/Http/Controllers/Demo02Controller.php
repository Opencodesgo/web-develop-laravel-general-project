<?php
/**
 * App, Http, 控制器, Demo02
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo02Controller extends BaseController {
	
	public function index() {
		echo 'demo02 index，数据库、事务！';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}

	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
    
}
