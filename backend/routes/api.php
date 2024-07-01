<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'getAll'])->name('user.all-get');
Route::get('/users/{id}', [UserController::class, 'getById'])->name('user.get-by-id');
