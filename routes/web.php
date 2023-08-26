<?php

use App\Http\Controllers\AllCalculatorController;
use App\Http\Controllers\ChangeLangController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\dailyCalorieCalculatorContoller;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\SocialiteAuthController;
use App\Http\Controllers\HeaderSearshController;
use App\Http\Controllers\pregnancyCalculatorController;
use App\Http\Controllers\TwitterAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideosSearchController;
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
    return view('welcome');
});
Route::get('/medicine-health', function () {
    return view('medicine-health');
});
Route::get('/health-beauty', function () {
    return view('health-beauty');
});
Route::get('/pregnancy-childbirth', function () {
    return view('pregnancy-childbirth');
});
Route::get('/calories', function () {
    return view('calories');
});
Route::get('/aboutsus', function () {
    return view('aboutsus');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/categories-medicine-health', function () {
    return view('categories.categories-medicine-health');
});
Route::get('/article-details', function () {
    return view('article-details');
});
Route::get('/q&a', function () {
    return view('q&a');
});
Route::get('/q&a-details', function () {
    return view('q&a-details');
});

Route::get('/human-organ-categories', function () {
    return view('categories.human-organ-categories');
});
Route::get('/categories-health-beauty', function () {
    return view('categories.categories-health-beauty');
});

Route::get('/categories-pregnancy-childbirth', function () {
    return view('categories.categories-pregnancy-childbirth');
});

Route::get('/pregnancy-calculator', function () {
    return view('calculators.pregnancy-calculator');
});
Route::get('/calorie-calculator-details', function () {
    return view('calculators.calorie-calculator-details');
});
Route::get('/videos.blade', function () {
    return view('videos.blade');
});
Route::get('/categories-calories', function () {
    return view('categories.categories-calories');
});
Route::get('/calorie-calculator',[dailyCalorieCalculatorContoller::class, 'create']);
Route::post('/calorie-calculator',[dailyCalorieCalculatorContoller::class, 'calculate']);

Route::get('/pregnancy-calculator',[pregnancyCalculatorController::class, 'create']);
Route::post('/pregnancy-calculator',[pregnancyCalculatorController::class, 'calculate']);

Route::get('/all-calculators',[AllCalculatorController::class, 'index']);
Route::post('/search-calculator',[AllCalculatorController::class, 'search']);


Route::get('/article-details', function () {
    return view('details.article-details');
});

Route::get('/medications', function () {
    return view('medications');
});
Route::get('/calories-details', function () {
    return view('details.calories-details');
});
Route::get('/videos', function () {
    return view('videos');
});
Route::get('/video-details', function () {
    return view('details.video-details');
});
Route::get('/calories-details', function () {
    return view('details.calories-details');
});

Route::post('/search', [HeaderSearshController::class, 'search']);
Route::get('/diseases', [DiseasesController::class, 'index']);
Route::post('/diseases-search', [DiseasesController::class, 'diseases_search']);
Route::post('/videos-search', [VideosSearchController::class, 'videos_search']);


Route::get('lang/{locale}', [ChangeLangController::class, 'changeLanguage'])->name('lang');

Route::get('/contactus', [ContactUsController::class, 'create']);
Route::post('/contactus', [ContactUsController::class, 'store']);

Route::get('/{provider}/auth/redirect',[SocialiteAuthController::class, 'redirect']);
Route::get('/{provider}/auth/callback',[SocialiteAuthController::class, 'callback']);


Route::prefix('user')->name('user.')->group(function (){
    Route::middleware(['guest:web', 'PreventBcakHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/post', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
        Route::get('/password/forgot', [UserController::class, 'showForgotForm'])->name('forgot.password.form');
        Route::post('/password/forgot', [UserController::class, 'resetPasswordLink'])->name('forgot.password.link');
        Route::get('/password/reset/{token}', [UserController::class, 'showRestForm'])->name('reset.password.form');
        Route::post('/password/reset', [UserController::class, 'resetPassword'])->name('reset.password');
    });
    Route::middleware(['auth', 'PreventBcakHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class, 'logout'])->name('logout');
    });
});
