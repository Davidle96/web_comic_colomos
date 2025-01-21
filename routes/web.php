<?php

use Illuminate\Support\Facades\Route;

Route::get('signin', function () {
    return view('sign_in');
});

Route::get('signup', function(){
    return view('sign_up');
});

Route::get('/', function(){
    return view('homepage');
});
