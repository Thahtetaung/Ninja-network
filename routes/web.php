<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $ninjas =[];
    return view('public.index' , ["ninjas" => $ninjas]);
})->name('index');

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "Naruto" , "skills" => 75,"id" =>1],
        ["name" => "Sasuke" , "skills" => 55,"id" =>2]
    ];
    return view('public.index' , ["ninjas" => $ninjas]);
})->name('index');;
Route::get('/ninjas/create' ,function() {
    return view('public.create');
});

Route::get('/ninjas/{id}', function ($id){

    return view('public.show', ["id" => $id]);
});

