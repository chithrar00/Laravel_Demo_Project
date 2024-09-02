<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
//User routes
Route::get('/',[UserController::class,"showcorrecthomepage"]);
Route::post('/register',[UserController::class,"register"]);
Route::post('/login',[UserController::class,"login"]);
Route::post('/logout',[UserController::class,"logout"]);
//Blog post related routes
Route::get('/create-post',[PostController::class,"showCreateForm"]);
Route::post('/create-post',[PostController::class,"storeNewForm"]);
Route::get('/post/{post}',[PostController::class,"viewSinglePost"]);
//Profile related routes
Route::get('/profile/{user:username}',[UserController::class,"profile"]);