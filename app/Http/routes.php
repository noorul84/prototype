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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Auth\AuthController@showLoginForm');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/p1', [
    'as' => 'p1', 
    'uses' => 'HomeController@showPage1'
]); 	
Route::get('/p2', [
    'as' => 'p2', 
    'uses' => 'HomeController@showPage2'
]); 	
Route::get('/p3', [
    'as' => 'p3', 
    'uses' => 'HomeController@showPage3'
]); 	
Route::get('/p4', [
    'as' => 'p4', 
    'uses' => 'HomeController@showPage4'
]); 	
Route::get('/p5', [
    'as' => 'p5', 
    'uses' => 'HomeController@showPage5'
]); 	

// // home controller (already have auth)
// Route::get('/home', [
//     'as' => 'home', 
//     'uses' => 'HomeController@showHome'
// ]); 		
// Route::get('/auth/profile', [
//     'as' => 'auth.profile', 
//     'uses' => 'HomeController@showProfile'
// ]); 
// Route::get('/auth/profile/edit', [
//     'as' => 'auth.profile.edit', 
//     'uses' => 'HomeController@editProfile'
// ]); 
// Route::get('/auth/password', [
//     'as' => 'auth.password', 
//     'uses' => 'HomeController@editPassword'
// ]); 	
// Route::post('auth/password', [
//     'uses' => 'HomeController@updatePassword'
// ]);	
