<?php

use Illuminate\Support\Facades\Route;

############################
#   LES ROUTES EN LARAVEL   #
############################

## route avec une fonction anonyme
Route::get('/', function () {
    return view('index');
});

## attribution de nom à une route (php artisan route:list)
Route::get('/movies/halloween', function () {
    return "Movie title: Halloween";
})->name('movies.halloween');
