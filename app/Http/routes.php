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

use Illuminate\Support\Facades\Route;


Route::get('/about', 'BasicSiteInfoController@about');

Route::get('/', 'BasicSiteInfoController@index');

Route::get('/jobs','JobController@index');

Route::get('/jobs/create','JobController@create');

//Route::get('/jobs/{slug}', 'JobController@showJobs');

Route::get('/jobs/{id}', 'JobController@showJobById');
Route::post('/jobs/store','JobController@store');

//login

Route::get('/auth/login','AuthController@getLogin');
Route::post('/auth/login','AuthController@postLogin');
Route::get('/auth/logout','AuthController@getLogout');


Route::get('admin',function(){
	return redirect('/admin/jobs');
});
Route::group([
	'namespace'=>'Admin',
	'middleware'=>'auth'], function(){
	Route::resource('admin/jobs','JobController');

	Route::get('/auth/upload','UploadController@index');
});
