<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function showMovies(){
        $api_url = "https://api.themoviedb.org/3/trending/movie/day?api_key=2d8720d11e22cbfe0f674907a9445329";
        $response = Http::withHeaders([
        'accept' => 'application/json',
        ])->get($api_url);
    
        $jsonData = $response->json()['results'];
        return view('movies',['data'=>$jsonData]);
    }

    public function showMovie(string $id){
        return view('movie');
    }
}
