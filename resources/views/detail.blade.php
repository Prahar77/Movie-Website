<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/details.css')}}">
</head>

<body>
    <h1> Details </h1>
    <h2> About this movie</h2>
    <img src="{{asset('img/film.jpg')}}" class="card-img-top" alt="Movie">
    <br>
    <h3 class="card-title">{{$movie->moviename}}</h3>
    <br>
    <br>
         <h5> Release date: </h5> <h4> {{$movie->releasedate}}</h4>
    <br> <h5> Production: </h5> <h4>{{$movie->productioncompany}}</h4>
    <br> <h5> MovieTime: </h5> <h4>{{$movie->movietime}}</h4>
    <br> <h5> Actor: </h5> <h4>{{$movie->actor}}</h4>
    <br> <h5> Actress: </h5> <h4>{{$movie->actress}}</h4>
    <br> <h5> Industry: </h5> <h4>{{$movie->industry}}</h4>
    <br> <h5> Description: </h5> <h4>{{$movie->description}} </h4>  
</body>
</html>