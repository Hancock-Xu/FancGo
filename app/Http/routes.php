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


Route::get('example', function () {
	return view('example');
});

//Route::get('sitemap.xml', 'Admin\BasicSiteInfoController@siteMap');


Route::get('/', 'Admin\BasicSiteInfoController@index');
Route::get('/about', 'Admin\BasicSiteInfoController@about');
Route::get('/recruitment_guidance', 'Admin\BasicSiteInfoController@recruitmentGuidance');

Route::resource('job','Admin\JobController');
Route::get('/job_paginate', 'Admin\JobController@paginationJobsIndex');
Route::resource('company','Admin\CompanyController');

Route::auth();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group([
	'namespace'=>'Admin',
	'middleware'=>'auth'], function(){

	Route::get('/job/create', 'JobController@create');
	Route::post('/job', 'JobController@store');
	Route::get('/job/{id}/edit', 'JobController@edit');
	Route::get('/job/off_the_shelves/{id}', 'JobController@off_the_shelves');
	Route::post('/job/{id}', 'JobController@update');
	Route::get('/job/{id}/delete', 'JobController@destroy');
	Route::get('/job/apply/{id}', 'JobController@applyJob');
	Route::get('/job/interested/{user}/{job}', 'JobController@interestedInApplicant');
	Route::get('/job/notinterested/{user}/{job}', 'JobController@notInterestedInApplicant');

	Route::get('/company/create', 'CompanyController@create');
	Route::post('/company/storeprecompany', 'CompanyController@storePreCompany');
	Route::post('/company/storeCompany', 'CompanyController@storeCompany');
	Route::post('/company/updatePreCompany/{id}', 'CompanyController@updatePreCompany');
	Route::post('/company', 'CompanyController@store');
	Route::post('/company/send_verify_apply', 'CompanyController@sendVerifyRequestEmail');
	Route::post('/company/resend_verify_link','CompanyController@resendVerifyLinkEmail');
	Route::post('/company/{id}', 'CompanyController@update');
//	Route::get('/company/{id}/edit', 'CompanyController@edit');
	Route::delete('/company/{id}', 'CompanyController@destroy');
	Route::get('/company/verify_email/{token}/{id}', 'CompanyController@getVerifyRequestEmail');
	Route::get('/company/delete/{id}','CompanyController@deleteJob');

	Route::get('/profile/edit', 'ProfileController@edit');
	Route::post('/profile/upload_resume', 'ProfileController@uploadResume');
	Route::get('/profile/create', 'ProfileController@create');
	Route::post('/profile/storeprofile', 'ProfileController@storeProfile');
	Route::post('/profile/updateprofile','ProfileController@updateProfile');
	Route::get('/profile/company', 'ProfileController@company');
	Route::post('/profile/company/delete', 'ProfileController@deleteCompany');

	Route::get('/promote_jobleadchina', 'EmailIssuesController@EmailControllPanel');
	Route::post('/promote_to_company_jobleadchina', 'EmailIssuesController@companyPromote');
	Route::post('/promote_to_user_jobleadchina', 'EmailIssuesController@userPromote');
});

