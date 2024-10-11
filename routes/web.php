<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/contacts', [\App\Http\Controllers\ContactsController::class, 'index']);

Route::post('change-theme', [\App\Http\Controllers\SettingsController::class, 'changeTheme']);
