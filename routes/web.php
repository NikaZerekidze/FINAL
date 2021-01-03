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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/languege/{language}', 'LanguageController@index')->name('langIndex');

Route::get('/languege/{language}/News', 'LanguageController@news')->name('langNews');



Route::get('/admin', "NewsController@index")->name("Adminindex");

Route::get('/admin/create', "NewsController@create")->name("Admincreate");

Route::post("/admin/store", "NewsController@store")->name("adminstore");

Route::post("/admin/delete", "NewsController@delete")->name("admindelete");

Route::get("/admin/show/{id}", "NewsController@show")->name("adminshow");

Route::post("/admin/show/comments", "NewsController@store_comment")->name("store_comment");

Route::get("/admin/edit/{id}", "NewsController@edit")->name("adminedit");

Route::post("/admin/update", "NewsController@update")->name("update");


// Route::get("/test/ajax","ajaxController@index");
// Route::get("/ajax",function(){
// 	return view("ajax");
// });


// Route::get("/test",function(){
// 	return response("hi",200)->header('content-tyoe','text/plain');
// });

//////


// Route::get('/satesto', function () {
//     return view('newLayouts.meta');
// }); ტოკენის სანახავად დამჭირდე postman_ზე ერორს აგდებდა


Route::post("register","Api\AuthController@registration"
);

Route::post("login","Api\AuthController@login");

// Route::get("/News", "Api\NewsController2@index");


Route::get("/google/sign_in", "Auth\LoginController@google")->name("google");

Route::get("/sign-in/google/redirect", "Auth\LoginController@GoogleRedirect");