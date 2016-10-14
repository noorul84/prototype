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


Route::get('/home', [
    'as' => 'home', 
    'uses' => 'HomeController@showDashboard'
]); 
Route::post('/home', [
    'uses' => 'HomeController@postDashboard'
]); 


Route::get('/p1', [
    'as' => 'p1', 
    'uses' => 'HomeController@showPage1'
]);
Route::post('/p1', [
    'uses' => 'HomeController@postPage1'
]);




Route::get('/p2', [
    'as' => 'p2', 
    'uses' => 'HomeController@showPage2'
]); 	
Route::post('/p2', [
    'uses' => 'HomeController@postPage2'
]); 


Route::get('/p3', [
    'as' => 'p3', 
    'uses' => 'HomeController@showPage3'
]); 
Route::post('/p3', [
    'uses' => 'HomeController@postPage3'
]); 



Route::get('/p4', [
    'as' => 'p4', 
    'uses' => 'HomeController@showPage4'
]); 
Route::post('/p4', [
    'uses' => 'HomeController@postPage4'
]); 




Route::get('/p5', [
    'as' => 'p5', 
    'uses' => 'HomeController@showPage5'
]);
Route::post('/p5', [
    'uses' => 'HomeController@postPage5'
]);




