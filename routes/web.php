<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/building', [IndexController::class, 'index1']);
Route::get('/building/{room}', [IndexController::class, 'index2']);