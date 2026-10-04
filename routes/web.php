<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inform',function(){
return view('inform');



});

Route::get('/contact2',function(){
    return view('contact2');
});


Route::get('/main',function(){
    return view('main');
});

Route::get('/responsive',function(){
    return view('responsive');
});

Route::get('/room',function(){
    return view('room');
});





