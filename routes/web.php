<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
