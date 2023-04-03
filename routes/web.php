<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'landing']);
Route::get('/upload',[PageController::class,'uploadPage'])->name('upload');
Route::get('/show',[PageController::class,'showAllFiles']);
Route::get('/download/{file}',[PageController::class,'downloadFile']);
Route::get('/view/{id}',[PageController::class,'viewFile']);


Route::post('/upload',[PageController::class,'storeNewFiles']);
