<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ContactController::class, 'home'])->name('/home');

Route::get('/info', [\App\Http\Controllers\ContactController::class, 'info'])->name('/info');

Route::get('/photo', [\App\Http\Controllers\ContactController::class, 'photo'])->name('/photo');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('/contact');

Route::post('/contact/check', [\App\Http\Controllers\ContactController::class, 'contact_check'])->name('/contact_check');

Route::get('/review', [\App\Http\Controllers\ContactController::class, 'review'])->name('/review');

Route::post('/review/check', [\App\Http\Controllers\ContactController::class, 'review_check'])->name('/review_check');



