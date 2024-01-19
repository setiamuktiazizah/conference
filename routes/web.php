<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubmitPaperController;
use App\Http\Controllers\PaperInfoController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Guestlistcontroller;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ListofPartnerController;
use App\Http\Controllers\ArticleforReviewerController;
use App\Http\Controllers\PartnerConferenceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AddSponsorController;
use App\Http\Controllers\RegisterConferenceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CheckoutController;
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

// Guest
Route::get('/login', function () {
    return view('user.login');
});

Route::get('/signup', function () {
    return view('user.signup');
});

Route::post('/login', [LoginController::class, 'auth'])->name('login');

Route::post('/signup', [RegisterController::class, 'register'])->name('signup');


// User

Route::get('/', function () {
    return view('home');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:user'])->group(function () {
    Route::get('/submitpaper', [SubmitPaperController::class, 'index'])->name('submitpaper');
    Route::get('/submitregisterpaper/{confid}', [SubmitPaperController::class, 'paperview'])->name('submit.register.paper');
    Route::get('/submitaddauthor/{confid}', [SubmitPaperController::class, 'addauthorview'])->name('submit.register.addauthor');
    Route::get('/submituploadreviewmanuscript/{confid}', [SubmitPaperController::class, 'uploadview'])->name('submit.register.upload');
    Route::post('/submitpaper', [SubmitPaperController::class, 'submitpaper'])->name('submit.register.store');
});

Route::get('/paperinfo', [PaperInfoController::class, 'index'])->name('paperinfo');

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

/* Admin */

Route::get('/auth-admin', function () {
    return view('admin.dashboard');
});

Route::get('/userlist', [Guestlistcontroller::class, 'GetAllUser'])->name('admin.guestlist.list');

Route::get('/userlist/{user}', [Guestlistcontroller::class, 'GetDataUser'])->name('admin.guestlist.GetDataUser');

Route::post('/userlist/{user}/edit', [Guestlistcontroller::class, 'EditUser'])->name('admin.guestlist.edit');

Route::post('/deleteuser/{user}', [Guestlistcontroller::class, 'DeleteUser'])->name('admin.guestlist.hapus');

Route::get('/accpartner', [ListofPartnerController::class, 'GetAllPartner']);

// Sponsor

Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsor');

Route::post('/addsponsors', [AddSponsorController::class, 'upload'])->name('upload');

Route::get('/addsponsors', [AddSponsorController::class, 'index']);

Route::get('/editsponsor/{id}', [SponsorController::class, 'edit'])->name('editSponsor');

Route::put('/updatesponsor/{id}', [SponsorController::class, 'update'])->name('updateSponsor');

Route::delete('/deleteSponsor/{id}', [SponsorController::class, 'destroy'])->name('deleteSponsor');

// Conference

Route::get('/conference', [ConferenceController::class, 'index']);

Route::get('/addconference', [ConferenceController::class, 'create'])->name('addConference');

Route::post('/storeconference', [ConferenceController::class, 'store'])->name('storeConference');

Route::get('/editconference/{id}', [ConferenceController::class, 'edit'])->name('editConference');

Route::put('/updateconference/{id}', [ConferenceController::class, 'update'])->name('updateConference');

Route::delete('/deleteConference/{id}', [ConferenceController::class, 'destroy'])->name('deleteConference');

Route::put('/update-partner-status/{userId}', [ListofPartnerController::class, 'updatePartnerStatus'])->name('updatePartnerStatus');

// Article

Route::get('/article', [ArticleController::class, 'index']);


// Partner
Route::get('/registerpartner', function () {
    return view('partner.registerpartner');
});

Route::get('/registerconference', [RegisterConferenceController::class, 'index']);

Route::get('/registerconference/{user}', [RegisterConferenceController::class, 'confhistory']);

Route::post('/registerpartner', [RegisterController::class, 'registerpartner']);

Route::get('/bundling', [OrderController::class, 'bundling']);

Route::post('/checkout', [OrderController::class, 'checkout']);

Route::get('/checkout/{nib}', [OrderController::class, 'checkout'])->name('checkoutConference');

Route::get('/invoice/{id}', [OrderController::class, 'invoice']);

Route::get('/bundling', function () {
    return view('partner.bundling');
});

Route::post('/create-payment', [CheckoutController::class, 'createPayment']);

Route::post('/midtrans-callback', [CheckoutController::class, 'handleCallback']);

Route::get('/bundling/{id}', [PartnerConferenceController::class, 'bundling'])->name('bundling');

Route::post('/bundling', [PartnerConferenceController::class, 'packet']);
Route::get('/partner/{id}', [PartnerConferenceController::class, 'partner']);
Route::get('listConference/{id}', [PartnerConferenceController::class, 'listConference'])->name('listConference');


// Route::get('/registerconference', function () {
//     return view('partner.registerconference');
// });

Route::get('/timescheduling', function () {
    return view('partner.timescheduling');
});

Route::resource('registerconferences', RegisterConferenceController::class);

Route::get('/registerconference2', function () {
    return view('adminseminar.registerconference2');
});

Route::get('/registerconference3', function () {
    return view('adminseminar.registerconference3');
});

Route::get('/registerconference4', function () {
    return view('adminseminar.registerconference4');
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



Route::get('/help', function () {
    return view('user.help');
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


Route::get('/articlereviewer/{user}', [ArticleforReviewerController::class, 'GetAllArtcileforReviewer']);


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/paperinfo', function () {
//     return view('paperinfo');
// });



// Route::get('/listofconference', function () {
//     return view('admin.listofconference');
// });

Route::get('/paymentconfiguration', function () {
    return view('bendahara.konfigurasi');
});

Route::get('/paymentstatus', [PaymentController::class, 'index']);


// Route::get('/sponsors', function () {
//     return view('adminseminar.sponsors');
// });