<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('post', 'PostCrudController');
    CRUD::resource('tag', 'TagCrudController');

    CRUD::resource('video', 'VideoCrudController');
    CRUD::resource('contact', 'ContactCrudController');


    Route::get('post/{id}/switch_is_home', 'PostCrudController@switch_is_home');
    Route::get('video/{id}/switch_is_home', 'VideoCrudController@switch_is_home');

    CRUD::resource('video', 'VideoCrudController');
}); // this should be the absolute last line of this file