<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Main
 */
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/**
 * Admin
 */
Route::view('/admin', 'admin.login');
Route::middleware(['auth'])->prefix('/admin')->namespace('Admin')->group(function () {
    Route::view('home', 'admin.index');
});
