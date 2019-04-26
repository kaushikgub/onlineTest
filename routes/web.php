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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test','StudentController@master');

//----------------Home Page------------------------------
Route::get('/','AdminController@index');

// ------------------Student Panel---------------------------------------------------

Route::get('/student/exam','StudentController@exam');
Route::get('/student/sign-out','StudentController@signOut');
Route::get('/student/summary/{id}','StudentController@completeExamSummary')->middleware('student');
Route::get('/student/summary','StudentController@examSummary')->middleware('student');
//Route::get('/student/questions','StudentController@questions')->middleware('student');
Route::get('/student/instruction1','StudentController@instruction1')->middleware('student');
Route::get('/student/instruction2','StudentController@instruction2')->middleware('student');
Route::get('/student/instruction3','StudentController@instruction3')->middleware('student');
Route::get('/student/conform','StudentController@conform')->middleware('student');
Route::get('/student/feedback','StudentController@feedback')->middleware('student');
Route::get('/student/buy/{id}','StudentController@packageBuyRequest')->middleware('student');
Route::get('/student/thank-you','StudentController@thankYou')->middleware('student');
Route::get('/student/submit-marks','StudentController@submitMark')->middleware('student');
Route::get('/student/registration','StudentController@registration');
Route::get('/student/forgot-password','StudentController@forgotPassword');

Route::get('/student/test','StudentController@home')->middleware('student');
Route::get('/student/change-password','StudentController@changePassword')->middleware('student');
Route::get('/student/my-profile','StudentController@myProfile')->middleware('student');
Route::get('/student/update-info','StudentController@updateInfo')->middleware('student');
Route::get('/student/buy-package','StudentController@buyPackage')->middleware('student');
Route::get('/student/conform-login/{id}','StudentController@conformLogin')->middleware('student');
Route::get('/student/all-questions/{id}','StudentController@allQuestions')->middleware('student');

Route::post('student/store','StudentController@studentStore');
Route::post('student/submitConformLogin','StudentController@submitConformLogin');
Route::post('student/login','StudentController@login');
Route::post('student/change-password','StudentController@changePass');
Route::post('student/update-info','StudentController@updateProfileInfo');
Route::post('student/forgot-pass','StudentController@forgetPass');
Route::post('student/feedback','StudentController@studentFeedback');



// ------------------Admin Panel---------------------------------------------------

Route::get('/admin/add-question','AdminController@addQuestion')->middleware('admin');
Route::get('/admin/add-demo-question','AdminController@addDemoQuestion')->middleware('admin');
Route::get('/admin/delete-demo-questions','AdminController@deleteDemoQuestions')->middleware('admin');
Route::get('/admin/login','AdminController@login');
Route::get('/admin/sign-out','AdminController@signOut');
Route::get('/admin/student-list','AdminController@studentList')->middleware('admin');
Route::get('/admin/change-password','AdminController@changePassword')->middleware('admin');
Route::get('/admin/add-premium','AdminController@addPremium')->middleware('admin');
Route::get('/admin/delete/{id}','AdminController@deleteStudent')->middleware('admin');
Route::get('/admin/details/{id}','AdminController@detailsStudent')->middleware('admin');
Route::get('/admin/student-password-changing-request','AdminController@listChangePassword')->middleware('admin');
Route::get('/admin/s-c-p/{id}','AdminController@studentPasswordChange')->middleware('admin');
Route::get('/admin/request-package','AdminController@RequestPackage')->middleware('admin');
Route::get('/admin/request-package-delete/{id}','AdminController@RequestPackageDelete')->middleware('admin');
Route::get('/admin/user-questions','AdminController@showUserQuestions')->middleware('admin');
Route::get('/admin/delete-user-questions','AdminController@deleteUserQuestions')->middleware('admin');


Route::post('admin/add-question','AdminController@storeQuestions');
Route::post('admin/change-password','AdminController@passwordChanging');
Route::post('/admin/login','AdminController@loginCheck');
Route::post('/admin/add-premium','AdminController@premium');
Route::post('admin/user-questions','AdminController@userQuestions');
Route::post('admin/student-change-password','AdminController@studentPassword');
Route::post('admin/add-demo-question','AdminController@storDemoQuestions');


//------------------------ajax-----------------------
Route::get('/admin/ajax','AdminController@getItem');
Route::get('/student/my-test','StudentController@getItem');


//------------------------Questions-----------------------


Route::get('/test123', 'StudentController@data')->middleware('student');
Route::get('/button', 'StudentController@button')->middleware('student');

Route::get('/student/questions', 'StudentController@TimerQuestions')->middleware('student');
Route::get('/student/questionById', 'StudentController@questionById')->middleware('student');
Route::get('/student/question-set', 'StudentController@questionSet')->middleware('student');
Route::get('/student/submitQuestion', 'StudentController@submitQuestion')->middleware('student');
//Route::get('student/subjects', 'StudentController@subjects');
Route::get('student/timer', 'StudentController@timer')->middleware('student');

Route::get('student/review', 'StudentController@review')->middleware('student');
Route::get('student/colorMark', 'StudentController@colorMark')->middleware('student');