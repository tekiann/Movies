<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$Title ?? ''}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </head>
    <body class="bg-white ">
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

        <div class="container  mt-2">
            <div class="row ">
                @foreach($Search as $search)
                <div class="card col-sm-4 mt-2 mx-auto" style="width:18rem;">
                    <img src="{{$search['Poster'] ?? ''}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$search['Title'] ?? ''}} ({{$search['Year'] ?? ''}})</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{$search['Type'] ?? ''}}</h6>
                        <a href="/s={{$search['imdbID'] ?? ''}}" class="card-link">See more</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <ul class="pagination justify-content-center pagination-lg mt-3">
        @if($page ==1)
            <li class="page-item disabled"><a class="page-link" href="/s={{$nomeRequest}}//page={{$page-1}}">Previous</a></li>
        @else
            <li class="page-item"><a class="page-link" href="/s={{$nomeRequest}}//page={{$page-1}}">Previous</a></li>
        @endif
        @for ($i = $page; $i < $page+5; $i++)
            @if($i<($totalResults/10)+1)
                @if($i==$page)
                    <li class="page-item active"><a class="page-link" href="/s={{$nomeRequest}}//page={{$i}}">{{$i}}</a></li>

                @else
                    <li class="page-item"><a class="page-link" href="/s={{$nomeRequest}}//page={{$i}}">{{$i}}</a></li>


                @endif
            @endif
        @endfor
        @if($i<($totalResults/10)+1)
        <li class="page-item"><a class="page-link" href="/s={{$nomeRequest}}//page={{$page+1}}">Next</a></li>
        @else
        <li class="page-item disabled"><a class="page-link" href="/s={{$nomeRequest}}//page={{$page+1}}">Next</a></li>
        @endif
        </ul>
    </body>
</html>
