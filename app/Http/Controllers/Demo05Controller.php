<?php
/**
 * App, Http, 控制器, Demo05
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

use Intervention\Image\ImageManager;	#引入Image
use Intervention\Image\Drivers\Gd\Driver;

class Demo05Controller extends BaseController {
	
	private $imageDir = '../storage/app/public/';
	
	public function index() {
		echo 'demo05 index，图片！';
	}

	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		$imageDir = $this->imageDir;
		$manage = new ImageManager(new Driver());
		//dd($manage);
		$image = $manage->create(800,600)->fill('white');
		$image->save($imageDir.'output.jpg',80);
		dd($image);
	}

}
