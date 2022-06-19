<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ConfigController;


Route::get('change_locale/{locale}', [ConfigController::class, 'changeLocale'])->name('change_locale');

Route::group(['middleware' => 'set_locale'], function() {
    Route::get('/questions/{token}', [QuestionController::class, 'form'])->name('form');
    Route::get('/success_message', [QuestionController::class, 'successMessage'])->name('success_message');
    Route::post('/questions', [QuestionController::class, 'form_post'])->name('form_post');
});




