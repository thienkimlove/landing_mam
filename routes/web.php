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

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('mam-hoa-xuan.html', 'FrontendController@landing1')->name('frontend.landing1');
Route::get('sam-to-nu.html', 'FrontendController@landing2')->name('frontend.landing2');
Route::get('white-plus.html', 'FrontendController@landing3')->name('frontend.landing3');
Route::post('saveContact', 'FrontendController@saveContact')->name('frontend.saveContact');
Route::get('tu-khoa/{value}', 'FrontendController@tag')->name('frontend.tag');

Route::get('lien-he', 'FrontendController@contact')->name('frontend.contact');
Route::get('dieu-khoan', 'FrontendController@policy')->name('frontend.policy');
Route::get('video/{value?}', 'FrontendController@video')->name('frontend.video');

# Sitemap
Route::get('{value}', 'FrontendController@main')->name('frontend.main');



