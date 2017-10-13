<?php

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

Route::get('首頁/',['as' => 'hello.index', function () {
    return view('welcome');
}]);

Route::get('關於本站/about',['as' => 'about.index', function () {
    return view('welcome');
}]);

Route::get('最新消息/news',['as' => 'news.index', function () {
    return view('welcome');
}]);