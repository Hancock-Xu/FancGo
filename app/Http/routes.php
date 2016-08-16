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
//Route::get('/about', 'BasicSiteInfoController@about');

Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');

Route::resource('job','Admin\JobController');
Route::resource('company','Admin\CompanyController');


Route::group([
	'namespace'=>'Admin',
	'middleware'=>'auth'], function(){

	Route::get('/job/create', 'JobController@create');
	Route::post('/job', 'JobController@store');
	Route::get('/job/{id}/edit', 'JobController@edit');
	Route::put('/job/{id}', 'JobController@update');
	Route::delete('/job/{id}', 'JobController@destroy');
	Route::get('/job/apply/{id}', 'JobController@applyJob');

	Route::get('/company/create', 'CompanyController@create');
	Route::post('/company', 'CompanyController@store');
	Route::get('/company/{id}/edit', 'CompanyController@edit');
	Route::put('/company/{id}', 'CompanyController@update');
	Route::delete('/company/{id}', 'CompanyController@destroy');

	Route::post('company/storeCompany', 'CompanyController@storeCompany');
	Route::post('company/storePreCompany', 'CompanyController@storePreCompany');
	
	Route::post('company/send_verify_apply', 'CompanyController@sendVerifyRequestEmail');
	Route::post('company/resend_verify_link','CompanyController@resendVerifyLinkEmail');
	
	Route::get('company/verify_email/{token}/{id}', 'CompanyController@getVerifyRequestEmail');

	Route::get('company/delete/{id}','CompanyController@deleteJob');


	Route::get('/profile/edit', 'ProfileController@edit');
	Route::post('/profile/update', 'ProfileController@update');
	Route::get('/profile/updated','ProfileController@updated');
	Route::get('/profile/company', 'ProfileController@company');
	Route::post('/profile/company/delete', 'ProfileController@deleteCompany');


});

Route::auth();