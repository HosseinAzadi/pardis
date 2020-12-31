<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', 'Home\HomeController@index')->name('home');

Route::get('/profile',function () {
    return view('home.company.show', [
        'company' => \Modules\PardisCore\Models\Company::query()->inRandomOrder()->first()
    ]);
})->name('profile');

Route::get('/company/service',function (){
    return view('home.company.service');
})->name('company.service');

Route::get('/company/categories',function (){
    return view('home.company.categories');
})->name('company.categories');

Route::get('/company/membership',function (){
    return view('home.company.membership');
})->name('company.membership');

Route::any('contact-us',function(){
    return view('home.contact-us');
})->name('contact-us');

Route::any('plans',function(){
    return view('home.plans');
})->name('plans');

Route::get('/test',function (){
    return 'hello';
})->middleware('password.confirm');

