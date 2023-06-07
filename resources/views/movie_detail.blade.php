<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')


    <title>Laravel Movie Detail MVC</title>
</head>
<body>

    <div class="container">

        <h1  class="my-5">Movie Details</h1>

        <div class="card">
            <img src="/img/video-movie-placeholder-image-grey.png" class="card-img" alt="">
            <div class="card-img-overlay">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-title">Titolo Originale: {{$movie->original_title}}</h6>
              <p class="card-text"><small>Nazionalità: {{$movie->nationality}}</small></p>
              <p class="card-text"><small>Data di uscita: {{$movie->date}}</small></p>
              <p class="card-text"><small>Voto: {{$movie->vote}}</small></p>
              <a href="{{route('home')}}" class="btn btn-success">Torna alla lista</a>
            </div>
          </div>


        {{-- title, original_title,  nationality, date,vote --}}

    </div>

</body>
</html>
