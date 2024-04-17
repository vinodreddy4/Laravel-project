<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;




Route::prefix('admin')->group(function () {
    Route::get('/my-portfolio', [PortfolioController::class, 'myportfolio']);
    Route::get('/reports', [PortfolioController::class, 'myportfolio']);
    // Add more routes here
});