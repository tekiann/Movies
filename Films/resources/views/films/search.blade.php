<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
<form action="{{route('search_film')}}" class="container" method="post">
    @csrf
    <div class=" row mx-auto ">

        <div class="col-md-8 mx-auto bg-light mt-5 p-3">

            <div class="form-group">
                <label for="">Nome</label>
                <input type="text"
                class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Digite o nome do filme ou serie</small>
            </div>
            <div class="form-group">
                <label for="">Ano</label>
                <input type="text"
                class="form-control" name="ano" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Digite o ano do lançamento do filme ou serie</small>

            </div>
        <button class="btn btn-outline-primary btn-block">Pesquisar</button>
    </div>
</div>
</form>
</body>
</html>
