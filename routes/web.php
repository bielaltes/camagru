<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('', fn() => to_route('posts.index'));


Route::resource('posts', PostController::class)
    ->only(['index', 'show']);