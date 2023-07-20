<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pokedex</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-12 d-flex justify-content-center p-3">
<h1>Benvenuto {{$trainer}}</h1>
</div>
</div>

<div class="row">
<div class="col-12 p-3">
<h2>Il nickname di {{$trainer}} e' "{{$username}}", e questi sono i pokemon che hai catturato :</h2>
<div class="p-3">
  <ul class="list-group list-group-horizontal">
  <li class="list-group-item">NOME</li>
  <li class="list-group-item">TIPO</li>
</ul>
<ul class="list-group list-group-vertical">
  @foreach ($pokemons as $pokemon)
      <li class="list-group-item">
        nome : {{$pokemon['name']}} tipo : {{$pokemon['type']}}
      </li>
  @endforeach
</ul>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>