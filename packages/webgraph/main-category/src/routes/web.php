<?php

// YourVendor\contactform\src\routes\web.php
use Illuminate\Support\Facades\Route;

Route::get('contact', function(){
    return 'Hello from the contact form package';
});

Route::resource('categories',\Webgraph\MainCategory\Http\Controllers\Panel\CategoryController::class);
