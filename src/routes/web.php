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
Route::get('/members_list', 'ListController@index')->name('members_list');
Route::get('/new_form', 'MainController@new_form')->name('new_form');
Route::post('/saveData', 'MainController@saveData')->name('saveData');
Route::post('/checkEmail', 'MainController@checkEmail')->name('checkEmail');
Route::post('/updateData', 'MainController@updateData')->name('updateData');
Route::post('/getMembersNumber', 'MainController@getMembersNumber')->name('getMembersNumber');



////admin
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('/members_list_admin', 'Admin\AdminController@members_list_admin')->name('members_list_admin');
    Route::post('/changeShow', 'Admin\AdminController@changeShow');

    Route::post('/changeAllShow', 'Admin\AdminController@changeAllShow');
});

//redirect
Route::get('/changeShow', function (){
    return redirect('/404');
});
Route::get('/changeAllShow', function (){
    return redirect('/404');
});
Route::get('/saveData', function (){
    return redirect('/404');
});
Route::get('/checkEmail', function (){
    return redirect('/404');
});
Route::get('/updateData', function (){
    return redirect('/404');
});
Route::get('/getMembersNumber', function (){
    return redirect('/404');
});



