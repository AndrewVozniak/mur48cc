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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/check', function () {
    return view('check');
})->name('check');

Route::get('/reviews/{city_id}/{product_id}', function () {
    return view('reviews');
})->name('reviews');


Route::get('/vacansy', function () {
    return view('vacansy');
})->name('vacansy');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/actions', function () {
    return view('actions');
})->name('actions');


Route::get('/client/balance', function () {
    return view('balance');
})->name('balance');

Route::get('/buy/{id}', function () {
    return view('buy');
})->name('buy');

Route::get('/buy/{id}/{product_id}', function () {
    return view('buy');
})->name('buy');