<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/a', function(){
    return view('arshil');
});

Route::get('/dhiraj', function(){
    return view('Dk');
});
