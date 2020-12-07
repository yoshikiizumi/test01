<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');

Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');

Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');

Route::get('hello/del','HelloController@del');
Route::post('hello/del','HelloController@remove');

Route::get('hello/show','HelloController@show');

Route::get('person','PersonController@index');

Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');

Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');

Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

Route::get('board','BoardController@index');

Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@create');

Route::get('hello/rest','HelloController@rest');



Route::get('hello/session','HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');





Route::get('jissyu3','Jissyu3_1Controller@index');
Route::post('jissyu3','Jissyu3_1Controller@post');

Route::get('jissyu4','Jissyu3_2Controller@index');
Route::post('jissyu4','Jissyu3_2Controller@post');

Route::get('jissyu5','Jissyu3_3Controller@index');

Route::get('jissyu6','Jissyu4_1Controller@index');
Route::post('jissyu6','Jissyu4_1Controller@post');

Route::get('jissyu7','Jissyu4_2Controller@index');
Route::post('jissyu7','Jissyu4_2Controller@post');

Route::get('jissyu8','Jissyu4_3Controller@index');
Route::post('jissyu8','Jissyu4_3Controller@post');


Route::get('jissyu9','Jissyu4_4Controller@index');
Route::post('jissyu9','Jissyu4_4Controller@post');

Route::get('kouka1_1','kouka1_1Controller@index');

Route::get('kouka1_2','kouka1_2Controller@index');
Route::post('kouka1_2','kouka1_2Controller@post');

Route::get('jissyu10','jissyu5_1Controller@index');
Route::get('jissyu10/show','jissyu5_1Controller@show');

Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');

Route::get('jissyu13','jissyu6_1Controller@index');
Route::post('jissyu13/find','jissyu6_1Controller@find');

Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

Route::get('jissyu15','jissyu6_4Controller@index');
Route::get('jissyu15/add','jissyu6_4Controller@add');
Route::post('jissyu15/create','jissyu6_4Controller@create');

Route::get('jissyu16','jissyu6_5Controller@index');
Route::get('jissyu16/show','jissyu6_5Controller@show');

Route::get('ajax/comedian','Ajax\comedianController@index');

Route::get('comedian','comedianController@index');



Route::get('/home', 'HomeController@index')->name('home');

//下記を追記
//画像をアップロードするページ
Route::get('/upload', 'ImageController@input');
//画像を保存したり画像名をDBに格納する部分
Route::post('/upload', 'ImageController@upload');
//保存した画像を表示するページ
Route::get('/output', 'ImageController@output');
//上記までを追記