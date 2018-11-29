@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="card-columns">
      @foreach($resultado as $prueba)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="images/{{$prueba->Imagen}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$prueba->Tipo_categoria}}</h5>
        <p class="card-text">{{$prueba->descripcion}}</p>
        <a href="{{route('categorias.filtro',['id'=>$prueba->id_categoria])}}" class="btn btn-primary">Ir a categoría</a>
      </div>
    </div>
    @endforeach
    </div>
    </div>
  </body>
</html>
@endsection
