<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;


Route::get('/ninjas' ,[NinjaController::class , 'index'])->name('index');

Route::get('/ninjas/create' ,function() {
    return view('public.create');
});

Route::get('/ninjas/{id}', function ($id){

    return view('public.show', ["id" => $id]);
});

