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
Route::get('/template/{id}','templateController@deleteEdu');
Route::get('/template/delete/work/{id}','templateController@deleteWork');


Route::get('/template/updateedu/{id}','templateController@updateEdu');

Route::get('/template/updatephone/{id}','templateController@updatePhone');
Route::post('/template/updatephone/add/{id}','templateController@updateAddPhone');
Route::post('/template/addnumber', 'templateController@insertNumber');
Route::get('/template/delete/phone/{id}','templateController@deletePhone');

Route::get('/template/updatelanguage/{id}','templateController@updateLanguage');
Route::post('/template/updatelanguage/add/{id}','templateController@updateAddLanguage');
Route::post('/template/addlanguage', 'templateController@insertLanguage');
Route::get('/template/delete/language/{id}','templateController@deleteLanguage');

Route::get('/template/updateskills/{id}','templateController@updateSkills');
Route::post('/template/updateskills/add/{id}','templateController@updateAddSkills');
Route::post('/template/addskills', 'templateController@insertSkills');
Route::get('/template/delete/skills/{id}','templateController@deleteSkills');

Route::get('/template/updateawards/{id}','templateController@updateAwards');
Route::post('/template/updateawards/add/{id}','templateController@updateAddAwards');
Route::post('/template/addawards', 'templateController@insertAwards');
Route::get('/template/delete/awards/{id}','templateController@deleteAwards');

Route::get('/template/updateemail/{id}','templateController@updateEmail');
Route::post('/template/updateemail/add/{id}','templateController@updateAddEmail');
Route::post('/template/addemail', 'templateController@insertEmail');
Route::get('/template/delete/email/{id}','templateController@deleteEmail');

Route::get('/template/updatesocial/{id}','templateController@updateSocial');
Route::post('/template/updatesocial/add/{id}','templateController@updateAddSocial');
Route::post('/template/addsocial', 'templateController@insertSocial');
Route::get('/template/delete/social/{id}','templateController@deleteSocial');

Route::get('/template/updateadress/{id}','templateController@updateAdress');
Route::post('/template/updateadress/add/{id}','templateController@updateAddAdress');
Route::post('/template/addadress', 'templateController@insertAdress');
Route::get('/template/delete/adress/{id}','templateController@deleteAdress');

Route::post('/template/updateedu/add/{id}','templateController@updateAddEdu');

Route::get('/template/updatepdata/{id}','templateController@updatePdata');
Route::post('/template/updatepdata/add/{id}','templateController@updateAddPdata');

Route::get('/template/updatework/{id}','templateController@updateWork');
Route::post('/template/updatework/add/{id}','templateController@updateAddWork');

Route::get('/select', 'selectController@select');
Route::get('/template', 'templateController@template');
Route::get('/test', 'templateController@test');
Route::post('/template', 'templateController@insertEducation');
Route::post('/workcreate', 'workController@insertWork');
Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 
function () {
    return view('welcome');
});
