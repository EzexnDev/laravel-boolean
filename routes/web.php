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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/course', 'CourseController@index')->name('course');

Route::get('/aftercourse', 'AfterCourseController@index')->name('aftercourse');

Route::get('/freebootcamp', 'FreeBootCampController@index')->name('camp');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/user/{id}', 'UserController@show')->name('userdeatils');
