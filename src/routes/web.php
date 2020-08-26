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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', 'MainController@index')->name('main');
Route::get('/members-list', 'ListController@index')->name('members-list');
Route::get('/new-form', 'MainController@newForm')->name('new-form');
Route::post('/saveData', 'MainController@saveData')->name('saveData');
Route::post('/checkEmail', 'MainController@checkEmail')->name('checkEmail');
Route::post('/updateData', 'MainController@updateData')->name('updateData');
Route::post('/getMembersNumber', 'MainController@getMembersNumber')->name('getMembersNumber');


//Auth::routes();

//admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('/members-list-admin', 'Admin\AdminController@membersListAdmin')->name('members-list-admin');
    Route::post('/changeShow', 'Admin\AdminController@changeShow');

    Route::post('/changeAllShow', 'Admin\AdminController@changeAllShow');
});




