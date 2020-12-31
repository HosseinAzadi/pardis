<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Blog',
    'prefix' => 'blog',
    'middleware' => ['web']
], function () {

    Route::get('/', 'BlogController@index')->name('blog.index');

    Route::get('search', 'BlogController@search')->name('blog.search');

    Route::get('categories', 'BlogController@categories')->name('blog.categories');

    Route::get('show/{id}', 'BlogController@show')->name('blog.show');

});



