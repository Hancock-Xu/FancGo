<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Admin\BasicSiteInfoController@index');
Route::get('/about', 'BasicSiteInfoController@about');

Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');

Route::post('Admin\upload', 'Admin\UploadController@upload');
Route::delete('Admin\delete', 'Admin\UploadController@delete');

Route::group([
	'namespace'=>'Admin',
	'middleware'=>'auth'], function(){
	
	Route::resource('job','JobController');
	
	Route::resource('company','CompanyController');
	
	Route::resource('apartment','ApartmentController');

	Route::get('/profile/edit', 'ProfileController@edit');
	Route::post('/profile/update', 'ProfileController@update');
	Route::get('/profile/updated','ProfileController@updateSucceed');

	Route::post('/profile/upload/avatar','ProfileController@avatarUpload');

});
