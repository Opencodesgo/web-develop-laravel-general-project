<?php
/**
 * App, Http, 控制器, Demo01，通用
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class Demo01Controller extends BaseController {
	
	public function index() {
		echo 'demo01 index';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
    
	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		//$enviroment = App::enviroment();
		//var_dump($enviroment);
		$value = config('app.timezone');
		var_dump($value);
	}
	
}
