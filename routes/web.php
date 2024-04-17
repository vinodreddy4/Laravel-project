<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DemoController;




Route::prefix('admin')->group(function () {
    Route::get('/my-portfolio', [PortfolioController::class, 'myportfolio']);
    Route::get('/reports', [PortfolioController::class, 'myportfolio']);
    Route::get('/demo', [DemoController::class, 'demo']);
    // Add more routes here
});