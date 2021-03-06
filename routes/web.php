<?php

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

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FbpostController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::namespace('Authenticator')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/login/facebook',  [LoginController::class, 'redirectToFacebookProvider'] );
    Route::get('login/facebook/callback/',  [LoginController::class, 'handleProviderFacebookCallback']);
    Route::post('/login',[LoginController::class, 'login']);
    Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'] )->name('register');
    Route::post('register', [RegisterController::class, 'create'] );
    // Route::get('/verify/{token}', 'RegisterController@verifyEmail')->name('verify');
    // // Password Reset Routes... this was not requsted
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'] )->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'] )->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'] )->name('password.reset');
    Route::post('password/reset',  [ResetPasswordController::class, 'reset']);
// });


Route::group(['middleware' => ['auth']], function(){
    Route::get('/user/profile', [FbpostController::class,'getUserProfile']);
    Route::get('/user/company/metadata', [FbpostController::class,'fetchPageMetaData']);
    // Route::post('/user/profile', [FbpostController::class,'postToProfile']);
    // Route::get('/profile', [FbpostController::class, 'postToProfile']);
    // Route::get('/page/newpost', [FbpostController::class, 'postToPage']);
});
