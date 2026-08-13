<?php

use App\Http\Controllers\Api\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/works', [WorkController::class, 'index']);
