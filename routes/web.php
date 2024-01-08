<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubmitPaperController;
use App\Http\Controllers\PaperInfoController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Guestlistcontroller;
use App\Http\Controllers\ListOfConferenceController;
use App\Http\Controllers\ListofPartnerController;
use App\Http\Controllers\ArticleforReviewerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\AddSponsorController;
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

Route::get('/bundling', function () {
    return view('bundling');
});

Route::get('/registerconference', function () {
    return view('adminseminar.registerconference');
});

Route::get('/registerconference2', function () {
    return view('adminseminar.registerconference2');
});

Route::get('/registerconference3', function () {
    return view('adminseminar.registerconference3');
});

Route::get('/registerconference4', function () {
    return view('adminseminar.registerconference4');
});


Route::get('/addtopic', function () {
    return view('adminseminar.addtopic');
});

Route::get('/addtopic2', function () {
    return view('adminseminar.addtopic2');
});

Route::get('/addtopic3', function () {
    return view('adminseminar.addtopic3');
});

Route::get('/addtopic4', function () {
    return view('adminseminar.addtopic4');
});


Route::get('/timescheduling', function () {
    return view('adminseminar.timescheduling');
});

Route::get('/timescheduling2', function () {
    return view('adminseminar.timescheduling2');
});

Route::get('/timescheduling3', function () {
    return view('adminseminar.timescheduling3');
});

Route::get('/timescheduling4', function () {
    return view('adminseminar.timescheduling4');
});

Route::get('/conferenceregistrationdetails', function () {
    return view('adminseminar.conferenceregistrationdetails');
});


Route::get('/payment', function () {
    return view('adminseminar.payment');
});
Route::get('/payment2', function () {
    return view('adminseminar.payment2');
});
Route::get('/payment3', function () {
    return view('adminseminar.payment3');
});
Route::get('/payment4', function () {
    return view('adminseminar.payment4');
});


Route::get('/accpartner', [ListofPartnerController::class, 'GetAllPartner']);


Route::get('/help', function () {
    return view('user.help');
});

Route::get('/registerpartner', function () {
    return view('registerpartner');
});

Route::get('/conferencedetail', function () {
    return view('user.conferencedetail');
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

Route::get('/userlist', [Guestlistcontroller::class, 'GetAllUser']) -> name('admin.guestlist.list');

Route::get('/edituser/{user}', [Guestlistcontroller::class, 'GetDataUser'])->name('admin.guestlist.getdata');
Route::post('/edituser/{user}', [Guestlistcontroller::class, 'EditUser'])->name('admin.guestlist.edit');

Route::post('/deleteuser/{user}', [Guestlistcontroller::class, 'DeleteUser']) -> name('admin.guestlist.hapus');


Route::get('/articlereviewer/{user}', [ArticleforReviewerController::class, 'GetAllArtcileforReviewer']);


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

Route::get('/paymentconfiguration', function () {
    return view('bendahara.konfigurasi');
});

Route::get('/paymentstatus', [PaymentController::class, 'index']);

Route::post('/addsponsors', [AddSponsorController::class, 'upload'])->name('upload');
Route::get('/addsponsors', [AddSponsorController::class, 'index']);

Route::get('/sponsors', [SponsorController::class, 'index']);
Route::delete('/deleteSponsor/{id}', [SponsorController::class, 'destroy'])->name('deleteSponsor');

// Route::get('/sponsors', function () {
//     return view('adminseminar.sponsors');
// });