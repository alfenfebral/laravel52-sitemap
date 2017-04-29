<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/sitemap', 'SitemapController@show');
Route::get('/admin/index', 'SitemapController@index');
Route::get('/admin', 'SitemapController@index');
Route::get('/admin/add', 'SitemapController@create');
Route::post('/admin/store', 'SitemapController@store');
Route::get('/admin/edit/{id_sitemap}', 'SitemapController@edit');
Route::post('/admin/update/{id_sitemap}', 'SitemapController@update');
Route::get('/admin/delete/{id_sitemap}', 'SitemapController@destroy');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
