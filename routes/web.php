<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Dynamic route to handle any ID
Route::get('/profile/{id}', [ProfileController::class, 'index']);
