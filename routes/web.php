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

Route::group(['prefix' => 'admin'], function () {
    // 一覧
    Route::get('report/', 'Admin\ReportController@index');
    // 新規追加画面
    Route::get('report/create', 'Admin\ReportController@create');
    // 編集画面
    Route::get('report/edit', 'Admin\ReportController@edit');
    // データ追加
    Route::post('report/add', 'Admin\ReportController@add');
    // データ更新
    Route::post('report/update', 'Admin\ReportController@update');
    Route::post('report/delete','Admin\ReportController@delete');
    
    // 一覧
    Route::get('staff/', 'Admin\StaffController@index');
    // 新規追加画面
    Route::get('staff/create', 'Admin\StaffController@create');
    // 編集画面
    Route::get('staff/edit', 'Admin\StaffController@edit');
    // データ追加
    Route::post('staff/add', 'Admin\StaffController@add');
    // データ更新
    Route::post('staff/update', 'Admin\StaffController@update');

    // 一覧
    Route::get('user/', 'Admin\UserController@index');
    // 新規追加画面
    Route::get('user/create', 'Admin\UserController@create');
    // 編集画面
    Route::get('user/edit', 'Admin\UserController@edit');
    // データ追加
    Route::post('user/add', 'Admin\UserController@add');
    // データ更新
    Route::post('user/update', 'Admin\UserController@update');

    
    Route::get('home/', 'Admin\HomeController@index');


});
Auth::routes();

