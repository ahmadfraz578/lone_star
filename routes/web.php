<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/electrical', [PageController::class, 'electrical'])->name('electrical');
Route::get('/plumbing', [PageController::class, 'plumbing'])->name('plumbing');
Route::get('/roofing', [PageController::class, 'roofing'])->name('roofing');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/quote/submit', [PageController::class, 'submitQuote'])->name('quote.submit');
Route::post('/contact/submit', [PageController::class, 'submitContact'])->name('contact.submit');
