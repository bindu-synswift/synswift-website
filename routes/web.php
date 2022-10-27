<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('dashborad', App\Http\Controllers\AdminController::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('application', [App\Http\Controllers\HomeController::class, 'application'])->name('application');
Route::get('careers', [App\Http\Controllers\HomeController::class, 'career'])->name('career');
Route::get('coming-soon', [App\Http\Controllers\HomeController::class, 'comingsoon'])->name('comingsoon');
Route::get('contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('web-development', [App\Http\Controllers\HomeController::class, 'webDevelopment'])->name('webdevelopment');
Route::get('ui-ux', [App\Http\Controllers\HomeController::class, 'uiUxPage'])->name('uiuxPage');
Route::get('faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('why-us', [App\Http\Controllers\HomeController::class, 'whyUs'])->name('whyUs');
Route::post('sendmail', [App\Http\Controllers\HomeController::class, 'sendContact'])->name('sendmail');
Route::get('single-project/{id}', [App\Http\Controllers\HomeController::class, 'singleProject'])->name('singleProject');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('project', App\Http\Controllers\ProjectController::class);
    Route::resource('jobs', App\Http\Controllers\JobController::class);
    Route::post('change-status', [App\Http\Controllers\JobController::class,'statusChange'])->name('statusChange');
    Route::post('change-category-status', [App\Http\Controllers\CategoryController::class,'changeCatgeoryStatus'])->name('catgeoryStatusChange');
   

});
Auth::routes();


