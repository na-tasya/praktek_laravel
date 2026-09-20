<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Pos Barokah Mart adalah toko yang menyediakan berbagai kebutuhan sehari-hari dengan harga terjangkau dan pelayanan yang ramah.';
});