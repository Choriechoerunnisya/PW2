<?php

use App\Http\Controllers\AdminControlller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminControlller::class, 'index']);
