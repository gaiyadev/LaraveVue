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

Route::get('/', 'PagesController@index'); //Route for index.blade.php

Route::get('/about', 'PagesController@about'); //Route for about.blade.php
Route::get('/services', 'PagesController@services'); //Route for services.blade.php
Route::resource('/blog', 'PostsController'); //Routes for ALl my Blog Pages

Route::get('/adm', function() {
return view('pages/dash/index');
});



	
	




/* Route::get('users/create',['uses' => 'usersController@create']);

Route::post('users',['uses' => 'usersController@store']);  */
   

