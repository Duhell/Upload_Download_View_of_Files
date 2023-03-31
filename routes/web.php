<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'landing']);
Route::get('/upload',[PageController::class,'uploadPage']);
Route::get('/show',[PageController::class,'showAllFiles']);
