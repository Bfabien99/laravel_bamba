<?php

use Illuminate\Support\Facades\Route;

############################
#   LES ROUTES EN LARAVEL   #
############################

Route::get('/movies/list', function () {
    return view('list');
})->name('movies.list');

## acceder à une route avec paramètre
Route::get('/movies/{title}', function (string $title) {
    return "Movie title: $title";
})->name('movies.show');