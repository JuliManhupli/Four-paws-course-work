<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::get('/help', [MainController::class, 'help'])->name('help');

Route::get('/pets', [MainController::class, 'pets'])->name('pets');

Route::get('/pet/{img}', [MainController::class, 'pet'])->name('pet');

Route::post('/feedback', [MainController::class, 'feedback'])->name('feedback');

