<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index(){
        
        $featuredMovies = Movie::whereIsFeatured(true)->get();
        $movies = Movie::all();

  

        return inertia('User/Dashboard/index', [
            'featuredMovies' => $featuredMovies,
            'movies' => $movies,
        ]);
    }
}
