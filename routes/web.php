<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GDriveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SponsorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('upload', [GDriveController::class, 'upload']);
Route::get('get-image', [GDriveController::class, 'getImage']);



Route::resource('article', ArticleController::class);
Route::resource('sponsor', SponsorController::class);
