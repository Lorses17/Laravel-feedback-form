<?php

use App\Http\Controllers\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [Posts::class, 'index']);
Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback.form');
Route::post('/feedback', [FeedbackController::class, 'submitForm'])->name('feedback.submit');
Route::get('/feedback/thank-you', [FeedbackController::class, 'thankYou'])->name('feedback.thankyou');
Route::get('/feedback/list', [FeedbackController::class, 'list'])->name('feedback.list');
