<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class); //muestra directo solo porque tiene el invoke en el controlador
Route::get('/post',[PostController::class,'index']);
Route::get('/post/{show}',[PostController::class,'show']);//pasa una variable