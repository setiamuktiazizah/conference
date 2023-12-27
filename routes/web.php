<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubmitPaperController;
use App\Http\Controllers\PaperInfoController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Guestlistcontroller;
use App\Http\Controllers\ListOfConferenceController;
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

Route::get('/help', function () {
    return view('user.help');
});

Route::get('/submitpaperdetail', function () {
    return view('user.submitpaper-detail');
});

Route::get('/user-profile', function () {
    return view('user.user-profile');
});

Route::get('/user-profile/edit', function () {
    return view('user.user-profile-edit');
});

Route::get('/user-chairing', function () {
    return view('user.user-chairing');
});

Route::get('/registerpart1', function () {
    return view('user.register-part-1');
});

Route::get('/registerpart2', function () {
    return view('user.register-part-2');
});

Route::get('/registerpart3', function () {
    return view('user.register-part-3');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/userlist', [Guestlistcontroller::class, 'GetAllUser']);

Route::get('/articlelist', function () {
    return view('reviewer.articlelist');
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

Route::get('/listofconference', [ListOfConferenceController::class, 'index']);

Route::get('/submitregisterpaper', function () {
    return view('submitregisterpaper');
})->name('submit.register.paper');

// Route::get('/paperinfo', function () {
//     return view('paperinfo');
// });

Route::get('/submitaddauthor', function () {
    return view('submitaddauthor');
});

// Route::get('/listofconference', function () {
//     return view('admin.listofconference');
// });


Route::get('/submituploadreviewmanuscript', function () {
    return view('submituploadreviewmanuscript');
});

Route::get('/konfigurasipembayaran', function () {
    return view('bendahara.konfigurasi');
});

Route::get('/paymentstatus', function () {
    return view('bendahara.paymentstatus');
});
