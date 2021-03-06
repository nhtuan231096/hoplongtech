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
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
	include('admin/category.php');
	include('admin/partners.php');
	include('admin/product.php');
	include('admin/account.php');
	include('admin/news.php');
	include('admin/slider.php');
	include('admin/banner.php');
	include('admin/supporter.php');
	include('admin/webconfig.php');
	include('admin/service.php');
	include('admin/download.php');
	include('admin/comment.php');
});
// Route login admin
Route::get('admin/login.html','Admin\AdminController@login')->name('login');
Route::post('admin/login.html','Admin\AdminController@post_login')->name('login');

// Route logout admin
Route::get('admin/logout','Admin\AdminController@logout')->name('logout');

Route::group(['prefix'=>'','namespace'=>'Home'],function(){
	Route::get('/','HomeController@index')->name('home');
	Route::get('/san-pham','HomeController@index_product')->name('home_product');
	Route::post('/danh-sach-san-pham/','HomeController@search_product')->name('search_product');
	Route::get('/du-an','HomeController@project')->name('projects');
	Route::get('/du-an/{slug}','HomeController@detail_project')->name('detail_project');
	Route::get('//{slug}','HomeController@view')->name('view');
	Route::post('/comment','HomeController@comment')->name('comment');
	Route::post('/send-mail','HomeController@send_mail')->name('send_mail');
	Route::get('/confirm/{id}','HomeController@confirm')->name('confirm');
	});

// Route::get('/', function () {
//     return view('welcome');
// });
