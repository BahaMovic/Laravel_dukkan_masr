
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/hello', function()
{
	return view('pages.index');
});


Route::get('admin/edit/en','homepageController@edit');
Route::post('admin/edit/en','homepageController@store');

Route::get('admin/edit/ar','homepageController@edit_ar');
Route::post('admin/edit/ar','homepageController@store_ar');

Route::get('admin/edit/about/en','aboutController@edit');
Route::post('admin/edit/about/en','aboutController@store');

Route::get('admin/edit/about/ar','aboutController@edit_ar');
Route::post('admin/edit/about/ar','aboutController@store_ar');

////////////////////////////Doctor///////////////////////////////
Route::get('admin/show/doctors','doctorController@index');
Route::get('admin/add/doctor','doctorController@create');
Route::post('admin/add/doctor','doctorController@store');
Route::get('admin/edit/doctor/{id}','doctorController@edit');
Route::patch('admin/edit/doctor/{id}','doctorController@update');
Route::get('admin/delete/doctor/{id}','doctorController@destroy');



////////////////////////////Specialty///////////////////////////////
Route::get('admin/show/specialty','specialtyController@index');
Route::get('admin/add/specialty','specialtyController@create');
Route::post('admin/add/specialty','specialtyController@store');
Route::get('admin/edit/specialty/{id}','specialtyController@edit');
Route::patch('admin/edit/specialty/{id}','specialtyController@update');
Route::get('admin/delete/specialty/{id}','specialtyController@destroy');



//////////////////////News//////////////////////////
Route::get('admin/show/news','newsController@index');
Route::get('admin/add/news','newsController@create');
Route::get('admin/show/news/{id}','newsController@show');
Route::post('admin/add/news','newsController@store');
Route::get('admin/edit/news/{id}','newsController@edit');
Route::patch('admin/edit/news/{id}','newsController@update');
Route::get('admin/delete/news/{id}','newsController@destroy');


////////////////////////Feedback////////////////////////
Route::get('admin/show/feedbacks','feedbackController@index');
Route::get('admin/delete/feedback/{id}','feedbackController@delete');

////////////////////////contact us/////////////////////////

Route::get('admin/edit/contact/en','contactController@edit');
Route::post('admin/edit/contact/en','contactController@store');

////////////////////////Feedback////////////////////////
Route::get('admin/show/messages','messageController@index');
Route::get('admin/delete/message/{id}','messageController@delete');


///////////////////////pages/////////////////////////
Route::get('/','pageHomeController@showHomePageInArabic');
Route::post('/getDoctores','pageHomeController@getDoctors');
Route::post('/getDays','pageHomeController@getDays');
Route::post('/addbooking','pageHomeController@addbooking');
