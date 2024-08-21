<?php

use Illuminate\Support\Facades\Route;

############################
#   LES ROUTES EN LARAVEL   #
############################
Route::get('/', function () {
    return view('welcome');
});
