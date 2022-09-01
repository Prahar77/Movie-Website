<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <h1> MOVIE CARD </h1>
</head>
<body>
        
        <div class="container">
          <div class="row">
          @foreach($movies as $key => $movie)
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('img/movielogo.jpg')}}" class="card-img-top" alt="Movie">
                  <div class="card-body">
            <h5 class="card-title">{{$movie->moviename}}
              <br>Release date: {{$movie->releasedate}}
              <br> Production: {{$movie->productioncompany}}
              <br> MovieTime: {{$movie->movietime}}
              <br> Actor: {{$movie->actor}}
              <br> Actress: {{$movie->actress}}
              <br> Industry: {{$movie->industry}}
            </h5>
                     
            <a href="#" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    
      @endforeach
  </body>
</html>

