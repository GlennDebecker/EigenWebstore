<?php

use App\Http\Controllers\BackendCOntroller;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;

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
    Route::post('/claim','save_claim')->name('save_claim');
});

//User Routes
Route::group(['middleware' => ['auth', 'checkstatus', 'verified']], function () {
    Route::controller(FrontendController::class)->name('frontend.user.')->group(function(){
        Route::get('/profile','profile')->name('profile');
        Route::get('/update-profile','update_profile')->name('profile.update');
        Route::get('/chat/{pre?}','chat')->name('chat');
        Route::post('/chat-save','chat_save')->name('chat-save');
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

    Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function(){
        Route::get('/index-product','index')->name('index-product')->middleware(['admin']);
        Route::get('/add-product','create')->name('add-product');
        Route::post('/add-product/store','store')->name('store-product');
        Route::get('/view-product/{id}','view')->name('view-product');
        Route::get('/edit-product/{id}','edit')->name('edit-product');
        Route::post('/edit-product-store','edit_update')->name('edit.store-product');
        Route::delete('/delete-product/{id}','destroy')->name('delete-product');
 
    });

    Route::controller(ClaimController::class)->prefix('claims')->name('claims.')->group(function(){
        Route::get('/index-claim','index')->name('index-claim')->middleware(['admin']);
        Route::get('/responde-claim/{id}','responde')->name('responde-claim')->middleware(['admin']);

 
    });

    Route::controller(ChatController::class)->prefix('chats')->name('chats.')->group(function(){
        Route::get('/index','index')->name('index')->middleware(['admin']);
        Route::get('/conversation/{id}','conversation')->name('conversation')->middleware(['admin']);
        Route::post('/chat-save/{id}','chat_save')->name('chat-save')->middleware(['admin']);

 
    });
});
