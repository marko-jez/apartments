<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('apartmentss', [PageController::class, 'apartmentss'])->name('apartments');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('single_blog', [PageController::class, 'single_blog'])->name('single_blog');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('elements', [PageController::class, 'elements'])->name('elements');

Route::get('show/{id}', [ApartmentController::class, 'show'])->name('show');
