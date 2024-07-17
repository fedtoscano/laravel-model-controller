<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    @vite('resources/js/app.js')
</head>
<body>
    <div>
        <h1>Movies</h1>
    </div>

<div class="container">
    <div class="row">
        @foreach ($movies as $movie )
            <div class="card mb-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><strong>Titolo originale:</strong> {{$movie->original_title}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><strong>Nazionalità:</strong> {{$movie->nationality}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><strong>Data di uscita:</strong> {{$movie->date}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><strong>Voto:</strong> {{$movie->vote}}</h6>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
