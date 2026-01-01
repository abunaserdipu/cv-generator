<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkedinCvController;

Route::get('/linkedin-cv', [LinkedinCvController::class, 'index']);
Route::post('/linkedin-cv/generate', [LinkedinCvController::class, 'generate']);

