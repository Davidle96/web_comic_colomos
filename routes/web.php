<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign_in');
});

Route::get('/signup', function(){
    return view('sign_up');
});

Route::get('/home', function(){
    return view('homepage');
});
