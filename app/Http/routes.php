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

Route::get('/', function () {
    return view('index');
});


Route::group(['middleware' => ['web']], function () {
	Route::get('/userarea/{id}','templateController@userArea');
		Route::auth();
	Route::get('/home', 
	function () {
	    return view('welcome');
	});
	Route::get('/template/updateedu/{id}','templateController@updateEdu');
	Route::post('/template/updateedu/add/{id}/{id2}','templateController@updateAddEdu');
	Route::get('/edudelete/{id}','templateController@deleteEdu');
	Route::post('/educreate/{id}', 'templateController@insertEducation');

	Route::get('/template/delete/work/{id}','templateController@deleteWork');
	Route::post('/workcreate/{id}', 'templateController@insertWork');
	Route::get('/template/updatework/{id}','templateController@updateWork');
	Route::post('/template/updatework/add/{id}/{id2}','templateController@updateAddWork');

	Route::get('/template/updatephone/{id}','templateController@updatePhone');
	Route::post('/template/updatephone/add/{id}/{id2}','templateController@updateAddPhone');
	Route::post('/template/addnumber/{id}', 'templateController@insertNumber');
	Route::get('/template/delete/phone/{id}','templateController@deletePhone');

	Route::get('/template/updatelanguage/{id}','templateController@updateLanguage');
	Route::post('/template/updatelanguage/add/{id}/{id2}','templateController@updateAddLanguage');
	Route::post('/template/addlanguage/{id}', 'templateController@insertLanguage');
	Route::get('/template/delete/language/{id}','templateController@deleteLanguage');

	Route::get('/template/updateskills/{id}','templateController@updateSkills');
	Route::post('/template/updateskills/add/{id}/{id2}','templateController@updateAddSkills');
	Route::post('/template/addskills/{id}', 'templateController@insertSkills');
	Route::get('/template/delete/skills/{id}','templateController@deleteSkills');

	Route::get('/template/updateawards/{id}','templateController@updateAwards');
	Route::post('/template/updateawards/add/{id}/{id2}','templateController@updateAddAwards');
	Route::post('/template/addawards/{id}', 'templateController@insertAwards');
	Route::get('/template/delete/awards/{id}','templateController@deleteAwards');



	Route::get('/template/updatepdata/{id}','templateController@updatePdata');
	Route::post('/template/updatepdata/add/{id}/{id2}','templateController@updateAddPdata');

	

	Route::get('/select', 'selectController@select');
	Route::get('/cv/create/{id}', 'templateController@cvCreate');
	Route::get('/cv/{id}', 'templateController@template');
	Route::get('/test', 'templateController@test');
	
	
});