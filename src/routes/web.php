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


Route::get('/', 'MainController@index')->name('main');
Route::get('/members_list', 'ListController@index')->name('members_list');
Route::get('/new_form', 'MainController@new_form')->name('new_form');
Route::post('/saveData', 'MainController@saveData')->name('saveData');
Route::post('/checkEmail', 'MainController@checkEmail')->name('checkEmail');
Route::post('/updateData', 'MainController@updateData')->name('updateData');
Route::post('/getMembersNumber', 'MainController@getMembersNumber')->name('getMembersNumber');


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    //admin
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/admin', 'Admin\AccountController@index');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
