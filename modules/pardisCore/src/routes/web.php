<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\PardisCore\Http\Controllers',
    'prefix' => 'panel',
    'middleware' => ['web', 'auth', 'verified']
], function () {
    Route::resource('company', 'CompanyController');
    Route::patch('company/approved/{company}', 'CompanyController@changeCompanyStatus')->name('company.status');
});
