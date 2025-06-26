<?php

declare(strict_types=1);

use App\Http\Controllers\Cars\CarController;
use Illuminate\Support\Facades\Route;

Route::any(uri: "/cars", action: [CarController::class, "index"]);
Route::get(uri: "/", action: [CarController::class, "index"]);
