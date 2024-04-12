<?php

use Illuminate\Support\Facades\Route;

Route::get('/my-portfolio', function() {
    return view('portfolio');
});
