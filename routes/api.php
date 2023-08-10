<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('posts', [ \App\Http\Controllers\API\PostController::class, 'index']);
Route::post('posts/add', [ \App\Http\Controllers\API\PostController::class, 'add']);
Route::get('posts/edit/{id}', [ \App\Http\Controllers\API\PostController::class, 'edit']);
Route::post('posts/update/{id}', [ \App\Http\Controllers\API\PostController::class, 'update']);
Route::delete('delete/{id}', [ \App\Http\Controllers\API\PostController::class, 'delete']);
