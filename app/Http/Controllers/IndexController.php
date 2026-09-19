<?php
/**
 * App, Http, 控制器, Index
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

class IndexController extends BaseController {
	
	//localhost:9033/index
	public function index() {
		echo '这是框架的默认index界面，欢迎你！9033!';
	}
    
	//localhost:9033/checkenv
	public function checkEnv() {
		echo '检查环境是否满足运行 laravel9! ';
		$waitCheck = [];
		$waitCheck['phpVersion'] = '8.1';
		$waitCheck['phpExt'] = ['bcmath','ctype','json','mbstring','openssl','pdo','tocknizer','xml'];
		$waitCheck['phpExt2'] = ['gd'];
		echo '<br/><br/>开始检查PHP环境！';
		echo '<br/>1、需要的php版本为：'.$waitCheck['phpVersion'];
		echo '<br/>当前版本为：'.PHP_VERSION;
		
		$ableExt = get_loaded_extensions();
		echo '<br/><br/>2、开始检查PHP扩展：';
		foreach($waitCheck['phpExt'] as $key=>$val) {
			$flag = in_array($val,$ableExt) ? true : false;
			$flagMsg = $flag ? '通过' : '不通过';
			echo '<br/>'.$key.' ==> '.$val;
			echo ' ==> '.$flagMsg;
		}
		
		echo '<br/><br/>2、开始检查PHP扩展2：';
		$able=get_loaded_extensions();
		foreach($waitCheck['phpExt2'] as $key=>$val) {
			$flag = in_array($val,$ableExt) ? true : false;
			$flagMsg = $flag ? '通过' : '不通过';
			echo '<br/>'.$key.' ==> '.$val;
			echo ' ==> '.$flagMsg;
		}
		
	}
}
