<?php

use App\Http\Controllers\PrivacyController;
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

Route::get('/robots.txt', App\Http\Controllers\RobotsController::class); // {!! Robots::metaTag() !!}

Route::redirect('index.{ext}', '/');
Route::redirect('home', '/');

Route::view('/', 'home')->name('home');
Route::view('thank-you', 'thank-you')->name('thank-you');

Route::post('form/cta', [App\Http\Controllers\FormController::class, 'ctaForm']);
Route::post('form/contact', [App\Http\Controllers\FormController::class, 'contactForm']);

Route::get('privacy-policy', [PrivacyController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('cookie-policy', [PrivacyController::class, 'cookiePolicy'])->name('cookie-policy');
