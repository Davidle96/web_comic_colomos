<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign_in');
});
