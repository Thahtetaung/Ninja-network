<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;


Route::get('/ninjas' ,[NinjaController::class , 'index'])->name('index');

Route::get('/ninjas/create' , [NinjaController::class , 'create'])->name('create');

Route::get('/ninjas/{id}', [NinjaController::class , 'show'])->name('show');


