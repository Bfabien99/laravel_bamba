<?php

use Illuminate\Support\Facades\Route;

############################
#   LES ROUTES EN LARAVEL   #
############################

# route normale
Route::get('/', function () {
    return view('index');
});
