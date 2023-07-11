<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand text-light" href="{{route('movies')}}">
      <div class="logo-container" style="display: flex">
          <div>
              <img src="{{ URL::asset('images/logo.png'); }}" alt="" width="60">
          </div>
          <div class="cinema-name" style="display: flex;align-items: center">
              <img src="https://see.fontimg.com/api/renderfont4/9Y2DK/eyJyIjoiZnMiLCJoIjo5OCwidyI6MTUwMCwiZnMiOjY1LCJmZ2MiOiIjRkZGRkZGIiwiYmdjIjoiIzM1M0Q0QiIsInQiOjF9/bGFyYXZlbCBjaW5lbWEgYXBw/nature-beauty-personal-use.png" alt=""
                  width="230">
          </div>
    </div>
    </a>
    
  </nav>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-5 mb-3">
            <div class="card p-3">
            <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="form-label">Budget</label>
                  <input type="number" class="form-control" name="budget">
              </div>
            </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Runtime</label>
                  <input type="number" class="form-control" name="runtime">
              </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="" class="form-label">Realease Date</label>
                    <input type="date" class="form-control" name="release_date">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Popularity</label>
                  <input type="number" class="form-control" name="popularity">
              </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="" class="form-label">Rating</label>
                    <input type="number" class="form-control" name="rating">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Homepage</label>
                  <input type="text" class="form-control" name="homepage">
              </div>
                </div>
                <div class="form-group text-center">
                  <button class="form-control btn btn-primary w-20 col-md-6 text-center" type="submit">Submit</button>
                </div>
                
            </form>
        </div>
        </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>