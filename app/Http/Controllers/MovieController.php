<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# php artisan make:controller MovieController
class MovieController extends Controller
{
    public function index(Request $request){
        return view('list');
    }
}
