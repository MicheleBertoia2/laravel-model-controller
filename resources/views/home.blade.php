<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')


    <title>Laravel Movies MVC</title>
</head>
<body>

    <div class="container">

        <h1  class="my-5">Movies selection</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Vote</th>
              </tr>
            </thead>
            <tbody>
                @forelse ( $movies as $movie )
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->vote }}</td>
                        <td><a href="{{route('movie_detail',  ['id' =>  $movie->id])}}" class="btn btn-success">Vai</a></td>
                    </tr>
                @empty
                    <h2>Non ci sono risultati</h2>
                @endforelse
            </tbody>
          </table>

    </div>

</body>
</html>
