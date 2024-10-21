<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\WelcomeController;

// Rute untuk Fakultas
Route::resource('faculties', FacultyController::class);

// Rute untuk Program Studi
Route::resource('study_programs', StudyProgramController::class);

Route::get('/', [WelcomeController::class, 'welcome'])->name('home');
Route::get('/welcome', [WelcomeController::class, 'welcome']);
