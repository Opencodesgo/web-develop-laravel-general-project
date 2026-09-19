<?php
/**
 * App, Http, 控制器, Demo04
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo04Controller extends BaseController {
	
	public function index() {
		echo 'demo04 index，office 办公类！';
		//$db = new \Illuminate\Support\Facades\Db();
		//dd($db::connection());
	}
	
	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		// 使用 onlyoffice
	}
    
}
