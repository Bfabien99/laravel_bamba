<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

############################
#   LES ROUTES EN LARAVEL   #
############################

Route::get('/movies/list', [MovieController::class, 'index'])->name('movies.list');