<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

/* Ruta Administrador */
Route::get('', [HomeController::class, 'index']);
