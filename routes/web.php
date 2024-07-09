<?php

use App\Http\Livewire\products;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Posts;

Route::get('posts', Posts::class);
Route::get('/', [\App\Http\Controllers\UserControllers::class, 'index']);
Route::get('products',products::class);
