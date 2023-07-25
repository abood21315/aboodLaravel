<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PersonalController;

Route::get('/',[PersonalController::class,'index'])->name('index');

Route::get('about',[PersonalController::class,'about'])->name('about');

 Route::get('contact',[PersonalController::class,'contact'])->name('contact');

 Route::get('projects',[PersonalController::class,'projects'])->name('projects');

Route::get('contact', [FormController::class, 'contact'])->name('personal.contact');

Route::post('contact', [FormController::class, 'contact_data'])->name('personal.contact_data');