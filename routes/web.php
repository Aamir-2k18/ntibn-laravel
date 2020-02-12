<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get( '/', 'PagesController@index' );
Route::get( '/about-us', 'PagesController@about' );
Route::get( '/membership', 'PagesController@membership' );
Route::get( '/registeration', 'PagesController@registeration' );
Route::get( '/events', 'PagesController@events' );
Route::get( '/privacy-policy', 'PagesController@privacy' );
Route::get( '/refund-policy', 'PagesController@refund' );
Route::get( '/terms-of-service', 'PagesController@terms' );
Route::get( '/search', 'PagesController@search' );

Auth::routes();

Route::get( '/admin', 'HomeController@index' )->name( 'admin' );
