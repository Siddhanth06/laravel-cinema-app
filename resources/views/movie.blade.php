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
                @if (str_starts_with($data['poster_path'],'http'))
                    <img src="http://image.tmdb.org/t/p/w342/{{$data['poster_path']}}" alt="" width="350" height="500">
                @else
                    <img src="{{ asset('products/' . $data['poster_path']) }}" alt="" width="200">
                    
                @endif
            </div>
            <div class="movie-contents">
                <div>
                    <p class="title">{{$data['title']}}</p>
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
                            <td class="td-bold">Imdb Rating</td>
                            <td>:</td>
                            <td class="td-info">{{$data['vote_average']}} ⭐</td>
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
                    <p class="movie-description"><span style="font-weight: bolder">Description : </span>{{$data['description']}}</p>
                </div>
                <a href="{{$data['homepage']}}" target="_blank"><button class="trailer-btn">Trailer</button></a>
            </div>
        </div>
    </div>
</body>
</html>