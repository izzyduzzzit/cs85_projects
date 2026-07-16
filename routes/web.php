<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "This is Izarra's first Laravel app!";
});

Route::get('/cs85_module2a/price_engine.php', function () {
    require base_path('cs85_module2a/price_engine.php');
});

Route::get('/cs85_module2a/price_engine_refactored.php', function () {
    require base_path('cs85_module2a/price_engine_refactored.php');
});

Route::get('/cs85_module2b/cosmic_calendar.php', function () {
    require base_path('cs85_module2b/cosmic_calendar.php');
});

Route::get('/module4b/show_inventory.php', function () {
    require base_path('module4b/show_inventory.php');
});

Route::get('/module4b/style/style.css', function () {
    require base_path('module4b/style/style.css');
});

Route::get('/module3b/ContactForm.php', function () {
    require base_path('module3b/ContactForm.php');
});
