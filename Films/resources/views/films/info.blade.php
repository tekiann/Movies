<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <title>{{$result['Title']}}</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Filmes</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavId">
                <form action="{{route('search_film')}}" class="form-inline my-2 my-lg-0" method="post">
                    @csrf
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">

                        <li class="nav-item mx-1">
                            <input type="text" class="form-control my-1 mr-2" name="nome" id="" aria-describedby="helpId" placeholder="Nome">
                        </li>

                        <li class="nav-item mx-1">
                            <button class="btn btn-primary my-1 mr-2 btn-block">Pesquisar</button>
                        </li>
                    </ul>
                </form>

            </div>
        </nav>
        <div class="container">
            <div class="row mt-5 ">
                <div class="col-lg-4">
                    <img src="{{$result['Poster']}}" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Thumbnail">
                </div>
                <div class="col-lg-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <h1>{{$result['Title'] ?? ''}} <span class="badge bg-warning">{{$result['Rated'] ?? ''}}</span></h1></li>
                        <li class="list-group-item"><p class="small">{{$result['Plot'] ?? ''}}</p></li>
                        @if($result['Type']=="series")
                        <li class="list-group-item"><p> Seasons: {{$result['totalSeasons'] ?? ''}}</p></li>
                        @endif
                        <li class="list-group-item"> <p> Released: {{$result['Released'] ?? ''}} / Runtime: {{$result['Runtime'] ?? ''}}</p></li>
                        <li class="list-group-item"><p> Director: {{$result['Director'] ?? ''}}</p></li>
                        <li class="list-group-item"><p> Writers: {{$result['Writer'] ?? ''}}</p></li>
                        <li class="list-group-item"><p> Actors: {{$result['Actors'] ?? ''}}</p></li>
                        <li class="list-group-item">Ratings:<span class="badge bg-warning">IMDB: {{$result['imdbRating'] ?? ''}}</span>
                        <span class="badge bg-warning">Metascore: {{$result['Metascore'] ?? ''}}</span></li>

                    </ul>







                </div>
            </div>
        </div>
    </body>
</html>
