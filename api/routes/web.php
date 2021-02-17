<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
