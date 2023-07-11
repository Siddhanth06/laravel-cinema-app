<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\movie;
use App\Http\Controllers\DB;

class MovieController extends Controller
{
    // public $key = config('services.google.key');
    
    public function showMovies(){
        // $key = config('services.google.key');
        // $api_url = "https://api.themoviedb.org/3/trending/movie/day?api_key=$key";
        // $response = Http::withHeaders([
        // 'accept' => 'application/json',
        // ])->get($api_url);
    
        // $jsonData = $response->json()['results'];
        // foreach($jsonData as $post){

        //     $movieId = $post['id'];


        //     $key = config('services.google.key');
        //     $singleMovieApiUrl = "https://api.themoviedb.org/3/movie/${movieId}?api_key=$key";
        //     $response = Http::withHeaders([
        //     'accept' => 'application/json',
        //     ])->get($singleMovieApiUrl)->json();


        //     \DB::table('movies')->insert([
        //         'id'=>$response['id'],
        //         'title'=>$response['title'],
        //         'description'=>$response['overview'],
        //         'poster_path'=>'http://image.tmdb.org/t/p/w500'.$response['poster_path'],
        //         'release_date'=>$response['release_date'],
        //         'vote_average'=>$response['vote_average'],
        //         'runtime'=>$response['runtime'],
        //         'budget'=>$response['budget'],
        //         'popularity'=>$response['popularity'],
        //         'homepage'=>$response['homepage'],
        //     ]);
        // }

        $data = \DB::table('movies')->get();
        return view('movies',['data'=>$data]);
    }

    public function showMovie(string $id){
        // $key = config('services.google.key');
        // $singleMovieApiUrl = "https://api.themoviedb.org/3/movie/${id}?api_key=$key";
        // $response = Http::withHeaders([
        //     'accept' => 'application/json',
        //     ])->get($singleMovieApiUrl)->json();
        $data = \DB::table('movies')
        ->where('id',"=","$id")
        ->get();
        // dd(json_decode($data,true)[0]['id']);
        // echo "<pre>";
        // print_r((array)json_decode(json_encode($data),true));
        return view('movie',['data'=>json_decode($data,true)[0]]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $movie = new movie();
        $movie->id = time();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->poster_path = $imageName;
        $movie->release_date = $request->release_date;
        $movie->vote_average = $request->rating;
        $movie->budget = $request->budget;
        $movie->runtime = $request->runtime;
        $movie->popularity = $request->popularity;
        $movie->homepage = $request->homepage;
        $movie->save();
        return back();
    }
}
