<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['prefix'=>'Backend', 'middleware'=>['auth', 'role:admin']], function () {
//route halaman Backend
	Route::get('/chat', 'FrontendController@chat');
	Route::resource('Lainnya', 'LainnyaController');
	Route::resource('About', 'AboutController');
	Route::resource('kategori_blog', 'Kategori_BlogController');
	Route::resource('blogs', 'BlogsController');
	Route::resource('kategori', 'KategoriController');
	Route::resource('Product', 'ProductController');
	Route::resource('Home', 'HommeController');
});



Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/produk', 'FrontendController@produk');
Route::get('/produkdetail/{id}', 'FrontendController@produkdetail');
Route::get('/blog', 'FrontendController@blog');
Route::get('/kategori/{kategori}', array('as' => 'showperkategori', 'uses' =>'FrontendController@showperkategori'));
Route::get('/kategori_blog/{id}','FrontendController@showperkategori_blog');
Route::get('/blog/{id}', 'FrontendController@showblog');


