<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
</head>
<body>  
    <header style="">
        <nav>
            <div class="logo-container">
                <div>
                    <img src="{{ URL::asset('images/logo.png'); }}" alt="" width="60">
                </div>
                <div class="cinema-name">
                    <img src="https://see.fontimg.com/api/renderfont4/9Y2DK/eyJyIjoiZnMiLCJoIjo5OCwidyI6MTUwMCwiZnMiOjY1LCJmZ2MiOiIjRkZGRkZGIiwiYmdjIjoiIzM1M0Q0QiIsInQiOjF9/bGFyYXZlbCBjaW5lbWEgYXBw/nature-beauty-personal-use.png" alt=""
                        width="230">
                </div>
            </div>
            <div class="logout-btn-container">
                <a href="{{route('create')}}">
                    <button class="add-movie-btn">
                        Add New Movie
                    </button>
                </a>
                <a href="{{route('logout')}}">
                    <button class="logout-btn">
                        Logout
                    </button>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div>
            <h1 class="trending-title">
                Popular Movies
            </h1>
            <div class="movies-list">
                @foreach ($data as $d)
                @php
                    $d = (array)$d;
                @endphp

                {{-- Movie Card Start--}}
                <div class="movie">
                    <a href="{{ route('movie', ['id'=>$d['id']]) }}">
                        <div>
                            @if (str_starts_with($d['poster_path'],'http'))
                                <img src="http://image.tmdb.org/t/p/w500/{{$d['poster_path']}}" alt="" width="200" height="300">
                            @else
                                <img src="{{ asset('products/' . $d['poster_path']) }}" alt="" width="200" height="300">
                            @endif
                        </div>
                    </a>
                    <div class="movie-content">
                        <p class="movie-title">{{$d['title']}}</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td align="right" class="release">Release Date</td>
                                    <td>:</td>
                                    <td align="left" class="date">{{date("F j, Y",strtotime($d['release_date']))}}</td>
                                </tr>
                                <tr>
                                    <td align="right" class="release">Rating</td>
                                    <td>:</td>
                                    <td align="left" class="rating">{{substr($d['vote_average'],0,3)}} ⭐</td>
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                    <div>
                        <a href="{{ route('movie', ['id'=>$d['id']]) }}"><button class="show-btn">Show More</button></a>
                    </div>
                </div>
                {{-- Movie Card End--}}
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>