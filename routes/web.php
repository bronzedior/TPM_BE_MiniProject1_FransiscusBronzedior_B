<?php

use App\Http\Controllers\ConsultantController;
use App\Models\Consultant;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConsultantController::class, 'welcome'])->name('welcome');

Route::post('/store', [ConsultantController::class,'store'])->name('store');

Route::get('/insert', [ConsultantController::class, 'addConsultant'])->name('addConsultant');
