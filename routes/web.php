<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Support\Facades\Auth;

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

// auth
Auth::routes(['verify' => true]); //routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

/* Main */
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/register_', 'App\Http\Controllers\PagesController@register_');
Route::get('/login_', 'App\Http\Controllers\PagesController@login_');
Route::get('/dashboard/settings', 'App\Http\Controllers\HomeController@settings');

/* Dashboard */
Route::get('/tests/create', 'App\Http\Controllers\TestController@create')->middleware(['auth', 'verified']);
Route::post('/tests', 'App\Http\Controllers\TestController@store')->middleware(['auth', 'verified']);
Route::get('/tests/{test}', 'App\Http\Controllers\TestController@show')->middleware(['auth', 'verified']);
//problem
Route::delete('/tests/{test}/create/{question}', 'App\Http\Controllers\TestController@destroy')->middleware(['auth', 'verified']);

Route::get('/tests/{test}/questions/create', 'App\Http\Controllers\QuestionController@create')->middleware(['auth', 'verified']);
Route::post('/tests/{test}/questions', 'App\Http\Controllers\QuestionController@store')->middleware(['auth', 'verified']);
Route::delete('/tests/{test}/questions/{question}', 'App\Http\Controllers\QuestionController@destroy')->middleware(['auth', 'verified']);

/* Edit */
Route::get('/tests/edit/{test}', 'App\Http\Controllers\TestController@edit')->middleware(['auth', 'verified']);
Route::put('/tests/edit/{test}', 'App\Http\Controllers\TestController@update')->middleware(['auth', 'verified']);

Route::get('/questions/edit/{question}', 'App\Http\Controllers\QuestionController@edit')->middleware(['auth', 'verified']);
Route::put('/questions/edit/{question}', 'App\Http\Controllers\QuestionController@update')->middleware(['auth', 'verified']);


/* Sharing testov */
Route::get('/testing/{test}-{slug}', 'App\Http\Controllers\TestingController@show');
Route::post('/testing/{test}-{slug}', 'App\Http\Controllers\TestingController@store');

/* Email */
Auth::routes(['verify' => true]);


/* Moje routy NOT USED */
Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UsersController@update']);

//Route::get('/welcome', 'App\Http\Controllers\PagesController@welcome');

// git test

