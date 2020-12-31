<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'PanelController@index')->name('panel');

Route::namespace('Authorization')->group(function () {

    Route::resource('/permissions', 'PermissionsController')
        ->except(['show']);

    Route::resource('/roles', 'RolesController')
        ->except(['show']);

    Route::resource('/roles-assignment', 'RolesAssignmentController')
        ->only(['index', 'edit', 'update']);

});

Route::resource('/account', 'Account\AccountController')
    ->only( 'edit', 'update');

Route::resource('/users', 'User\UserController')->except(['index', 'show']);

Route::post('tinymce', 'TinymceMediaController')->name('tinymce.upload');


