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

## route avec paramètre
# ajout de contrainte sur le paramètre year
Route::get('/movies/{year}', function (string $year) {
    return "Movie year: $year";
})->where('year', '\d{4}');# 4 chiffre

# le paramètre 'title' est requis
# le paramètre 'genre' est optionnel
Route::get('/movies/{title}/{genre?}', function (string $title) {
    return "Movie title: $title";
});