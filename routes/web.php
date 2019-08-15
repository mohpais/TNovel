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



Route::get('/', 'UserController@home');

Route::get('/view/{slug}', 'UserController@novel');
Route::get('/listnovel', 'UserController@listNovel');
Route::get('/reqNovel', 'UserController@request');
Route::get('/read/{slug}', 'UserController@chapter');

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


    Route::get('/admin', 'UserwebController@indexAdmin');
    Route::get('/user', 'UserwebController@indexUser');
    Route::post('/userweb/create', 'UserwebController@create');
    Route::get('/userweb/{id}/profile', 'UserwebController@profile');
    Route::post('/userweb/{id}/update', 'UserwebController@update');
    Route::get('/userweb/{id}/destroy', 'UserwebController@destroy');


Route::group(['middleware' => ['auth', 'checkRole:superadmin,admin']], function()
{
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile', 'DashboardController@profile');
    Route::get('/profile/{id}/edit', 'UserwebController@edit');
    
    Route::get('/novel', 'NovelController@index');
    Route::post('/novel/create', 'NovelController@create');
    Route::get('/novel/{id}/edit', 'NovelController@edit');
    Route::post('/novel/{id}/update', 'NovelController@update');
    Route::get('/novel/{id}/destroy', 'NovelController@destroy');
    Route::get('/novel/{slug}', 'ChapterController@show');
    Route::get('/chapter/{id}/create', 'ChapterController@post');
    Route::post('/chapter/create', 'ChapterController@create');
    Route::get('/chapter/{id}/edit', 'ChapterController@edit');
    Route::post('/chapter/{id}/update', 'ChapterController@update');
    Route::get('/chapter/{id}/destroy', 'ChapterController@destroy');
});

