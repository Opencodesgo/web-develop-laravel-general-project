<?php
/**
 * App, Http, 控制器, Demo06，日志
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;
use Illuminate\Support\Facades\Log;

class Demo06Controller extends BaseController {
	
	public function index() {
		echo 'demo06 index';
	}

	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		$dir = storage_path('logs/laravel.log');
		
		Log::emergency('系统崩溃，需要立即处理！');
		Log::alert('系统提醒，需要立即采取行动的错误！');
		Log::channel('app_log')->alert('系统提醒，需要立即采取行动的错误2！');
	}

}
