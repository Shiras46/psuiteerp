<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions.index');
Route::get('/solutions/{slug}', [PageController::class, 'solution'])->name('solutions.show');
Route::get('/clients', [PageController::class, 'clients'])->name('clients');
Route::get('/book-demo', [PageController::class, 'bookDemo'])->name('book-demo');
Route::post('/book-demo', [PageController::class, 'submitDemo'])->name('book-demo.submit');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Redirect direct visits to /login to the main app
Route::redirect('/login', 'https://app.psuiteerp.com/login');
