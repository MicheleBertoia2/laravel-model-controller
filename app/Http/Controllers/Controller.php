<?php

namespace App\Http\Controllers;

use App\Models\Guest\Movie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function movie_detail(){
        return view('movie_detail');
    }
}
