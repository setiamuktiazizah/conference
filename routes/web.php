<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubmitPaperController;
use App\Http\Controllers\PaperInfoController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/submitpaper', [SubmitPaperController::class, 'index'])->name('submitpaper');

Route::get('/paperinfo', [PaperInfoController::class, 'index'])->name('paperinfo');

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::post('/login', [LoginController::class, 'auth']);

Route::get('/signup', function () {
    return view('user/signup');
});

Route::post('/signup', [RegisterController::class, 'register']);


Route::get('/submitpaper', function () {
    return view('submitpaper');
});

Route::get('/submitregisterpaper', function () {
    return view('submitregisterpaper');
});

Route::get('/submitaddauthor', function () {
    return view('submitaddauthor');
});

Route::get('/submituploadreviewmanuscript', function () {
    return view('submituploadreviewmanuscript');
});

Route::get('/konfigurasipembayaran', function () {
    return view('bendahara.konfigurasi');
});