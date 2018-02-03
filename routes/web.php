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
/*
Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/', ['uses' => 'GithubController@index', 'as' => 'index']);
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
	
	
});

Route::group(['middleware'=>['auth','check-permission:superadmin|admin']], function () {
	Route::get('posts',['uses'=>'PostsController@index']);
	Route::get('posts/create',['uses'=>'PostsController@create']);
	Route::post('posts/store',['uses'=>'PostsController@store']);
});
