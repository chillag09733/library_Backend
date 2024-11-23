<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book_id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{book_id}', [BookController::class, 'update']);
Route::delete('/books/{book_id}', [BookController::class, 'destroy']);

Route::get('/carts', [CartController::class, 'index']);
Route::get('/carts/{cart_id}', [CartController::class, 'show']);
Route::post('/carts', [CartController::class, 'store']);
Route::put('/carts/{cart_id}', [CartController::class, 'update']);
Route::delete('/carts/{cart_id}', [CartController::class, 'destroy']);