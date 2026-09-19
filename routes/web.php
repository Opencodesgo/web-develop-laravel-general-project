<?php
/**
 * 路由，Web路由
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes	Web路由
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 这里您可以为应用注册Web路由。
| 路由是由组中的RouteServiceProvider加载的包含"web"中间件组。
|
*/

Route::get('/', function () {
    //return view('welcome');
	return '/index，/index/checkenv';
});

//以下为新增的 router

//localhost:9073/index
use App\Http\Controllers\IndexController;
Route::get('index', [IndexController::class, 'index']);
Route::get('index/checkenv', [IndexController::class, 'checkEnv']);

use App\Http\Controllers\Demo01Controller;
use App\Http\Controllers\Demo02Controller;
use App\Http\Controllers\Demo03Controller;
use App\Http\Controllers\Demo04Controller;
use App\Http\Controllers\Demo05Controller;
use App\Http\Controllers\Demo06Controller;
use App\Http\Controllers\Demo07Controller;
use App\Http\Controllers\Demo08Controller;
use App\Http\Controllers\Demo09Controller;
use App\Http\Controllers\Demo10Controller;
use App\Http\Controllers\Demo11Controller;
use App\Http\Controllers\Demo12Controller;
use App\Http\Controllers\Demo13Controller;
use App\Http\Controllers\Demo14Controller;
use App\Http\Controllers\Demo15Controller;
use App\Http\Controllers\Demo16Controller;
use App\Http\Controllers\Demo17Controller;
use App\Http\Controllers\Demo18Controller;

Route::get('demo01', [Demo01Controller::class, 'index']);
Route::get('demo01/{func}', [Demo01Controller::class, 'func']);

Route::get('demo02/{func}', [Demo02Controller::class, 'func']);
Route::get('demo03/{func}', [Demo03Controller::class, 'index']);
Route::get('demo04/{func}', [Demo04Controller::class, 'func']);
Route::get('demo05/{func}', [Demo05Controller::class, 'func']);
Route::get('demo06/{func}', [Demo06Controller::class, 'func']);
Route::get('demo07/{func}', [Demo07Controller::class, 'func']);
Route::get('demo08/{func}', [Demo08Controller::class, 'func']);
Route::get('demo09/{func}', [Demo09Controller::class, 'func']);
Route::get('demo10/{func}', [Demo10Controller::class, 'func']);
Route::get('demo11/{func}', [Demo11Controller::class, 'func']);
Route::get('demo12/{func}', [Demo12Controller::class, 'func']);
Route::get('demo13/{func}', [Demo13Controller::class, 'func']);
Route::get('demo14/{func}', [Demo14Controller::class, 'func']);
Route::get('demo15/{func}', [Demo15Controller::class, 'func']);
Route::get('demo16/{func}', [Demo16Controller::class, 'func']);
Route::get('demo17/{func}', [Demo17Controller::class, 'func']);
Route::get('demo18/{func}', [Demo18Controller::class, 'func']);