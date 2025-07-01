<?php

use App\Http\Controllers\ObrasController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ObrasController::class, 'index'])
->name('obras.index');
