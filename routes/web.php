<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact/store', [PagesController::class, 'store_contact'])->name('store_contact');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/question/answer', [PagesController::class, 'question_answer'])->name('question_answer');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/programs', [PagesController::class, 'programs'])->name('programs');
Route::get('/about', [PagesController::class, 'about'])->name('about');
