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
    <div class="movie-container">
        <div class="movie-desc">
            <div class="img-container">
                <img src="http://image.tmdb.org/t/p/w342/{{$data['poster_path']}}" alt="">
            </div>
            <div class="movie-contents">
                <div>
                    <p class="title">{{$data['original_title']}}</p>
                    <table class="movie-desc-table">
                        <tr class="movie-desc-td">
                            <td class="td-bold">Runtime</td>
                            <td>:</td>
                            <td class="td-info">{{$data['runtime']}} min</td>
                        </tr>
                        <tr class="movie-desc-td">
                            <td class="td-bold">Budget</td>
                            <td>:</td>
                            <td class="td-info">{{$data['budget']/10000000}}{{' Crores USD'}}</td>
                        </tr>
                        <tr class="movie-desc-td">
                            <td class="td-bold">Genres</td>
                            <td>:</td>
                            @foreach ( $data['genres'] as $d )
                                <td class="td-info genre" align="center">{{$d['name']}}</td>
                            @endforeach
                        </tr>
                        <tr class="movie-desc-td">
                            <td class="td-bold">Popularity</td>
                            <td>:</td>
                            <td class="td-info">{{$data['popularity']}}</td>
                        </tr>
                        <tr class="movie-desc-td">
                            <td class="td-bold">Release Date</td>
                            <td>:</td>
                            <td class="td-info">{{date("F j, Y",strtotime($data['release_date']))}}</td>
                        </tr>
                        
                    </table>
                    <p class="movie-description"><span style="font-weight: bolder">Description : </span>{{$data['overview']}}</p>
                </div>
                <a href="{{$data['homepage']}}"><button class="trailer-btn">Trailer</button></a>
            </div>
        </div>
    </div>
</body>
</html>