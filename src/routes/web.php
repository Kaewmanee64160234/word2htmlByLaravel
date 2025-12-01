<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [WordController::class, 'uploadForm']);
Route::post('/convert', [WordController::class, 'convert']);