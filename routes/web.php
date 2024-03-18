<?php

use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/arsip')->name('arsip');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('arsip', ArsipController::class);
