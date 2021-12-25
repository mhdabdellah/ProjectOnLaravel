<?php

use Illuminate\Support\Facades\Route;



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

Auth::routes();

Route::get('logout', 'App\Http\Controllers\CustomAuthController@signOut');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('client', 'App\Http\Controllers\HomeController@client');
// Route::get('index', 'App\Http\Controllers\HomeController@index');
// Route::get('tes', 'App\Http\Controllers\HomeController@test');
// Route::get('login', 'App\Http\Controllers\HomeController@login');

// Route::get('log', 'App\Http\Controllers\HomeController@login');
// Route::get('impeants', 'App\Http\Controllers\HomeController@impeants');
// Route::group([],function(){
// 	Route::resource('log','App\Http\Controllers\HomeController');

// });
                                /// ROUTS PURS LA TEST
// Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']);
//  Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
//   Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom');
//    Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('reg/ister-user');
//     Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom');
//      Route::get('signout', [App\Http\Controllers\CustomAuthController::class,'singOut'])->name('singnout');

// //route to show the login form 
// Route::get('login', array( 	'uses' => 'App\Http\Controllers\MainController@showLogin' ));
//  // route to process the form 
// Route::post('login', array( 	'uses' => 'App\Http\Controllers\MainController@doLogin' ));
// Route::get('logout', array( 	'uses' => 'App\Http\Controllers\MainController@doLogout' ));
//  Route::get('/', function () 	{ 	return view('welcome'); 	});

