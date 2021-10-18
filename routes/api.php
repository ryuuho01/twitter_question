<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;

Route::apiResource('/client', ClientController::class);
Route::apiResource('/post', PostController::class);