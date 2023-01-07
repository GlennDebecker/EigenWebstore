<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Auth::routes(['verify' => true]);

//Change Language
Route::get('/language/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

//Email varification
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Frontend Routes
Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/products','products')->name('products');
    Route::get('/pages/{id}','pages')->name('pages');
    Route::get('/contact','contact')->name('contact');
    Route::get('/frequently-asked-questions','faq')->name('faq');
    Route::get('/product/{id}','product')->name('product');
});

//User Routes
Route::group(['middleware' => ['auth', 'checkstatus', 'verified']], function () {
    Route::controller(FrontendController::class)->name('frontend.user.')->group(function(){
        Route::get('/profile','profile')->name('profile');
        Route::get('/update-profile','update_profile')->name('profile.update');
    });
});
// Admin Routes
Route::group(['middleware' => ['auth', 'checkstatus', 'admin']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //User Management
    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function(){
        Route::get('/index','index')->name('index')->middleware(['admin']);
        Route::get('/add','add')->name('add')->middleware(['superadmin']);
        Route::post('/add/store','store')->name('store')->middleware(['superadmin']);
        Route::get('/view/{id}','view')->name('view')->middleware(['admin']);
        Route::get('/edit/{id}','edit')->name('edit')->middleware(['admin']);
        Route::post('/edit-store','edit_update')->name('edit.store')->middleware(['admin']);
        Route::get('/status/{id}','status')->name('status')->middleware(['admin']);
    });
});