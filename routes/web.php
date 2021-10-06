<?php

use Illuminate\Support\Facades\Route;

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

Route::domain(config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('root');
    })->name('root');
});

Route::domain('admin.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');
});

Route::domain('broker.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('broker.home');
    })->name('broker.home');
});

Route::domain('salesperson.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('salesperson.home');
    })->name('salesperson.home');
});

Route::domain('consultant.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('consultant.home');
    })->name('consultant.home');
});

Route::domain('appraiser.' . config('app.domain'))->group(function () {
    Route::get('/', function () {
        return view('appraiser.home');
    })->name('appraiser.home');
});
