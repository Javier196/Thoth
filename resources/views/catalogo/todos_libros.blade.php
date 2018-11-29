@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
    float: center;
    width: 90%;
    padding: 0 100px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
    .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    }
    }

    /* Style the counter cards */
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
    }
    .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #cacdce;
    }
    .titulo
    {
    text-align: center;
    }
    .nombre
    {
    text-align: left;
    }

    * {box-sizing: border-box}
    .barra {
    width: 100%;
    align-items: center;
    background-color: #ddd;
    }
button{width: 10%;
align-items: center;}
    .skills {
    text-align: right;
    padding: 10px;
    color: white;
    }
    h5{text-align: center;}
    .php {width: 60%; background-color: #808080;}
    </style>
  </head>
  <body>
    @if(count($listas)>=1)
<div class="container">
  <div class="row">
    <div class="col-md-2">
    </div>

    <!-- <div class="col-md-8">
      <div class="row">
        <div class="col-md-8">
          <input class="form-control" id="search" type="search" placeholder="Buscar..">
        </div>
        <div class="col-md-4">
          <button type="button" name="button">Buscar</button>
        </div>

      </div>
    <br>
    <br>
  </div> -->
  <div class="col-md-2">

  </div>

  </div>

  <div class="card-columns">
    @foreach($listas as $libro)
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/disenosi/storage/app/libros/{{$libro->imagen_libro}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$libro->nombre}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Autor: {{$libro->autor}}</li>
    <li class="list-group-item">Editorial: {{$libro->editorial}}</li>
    <li class="list-group-item">Edición: {{$libro->edicion}}</li>
  </ul>
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <a href="{{route('newsol.solicitudes',['id'=>$libro->id_libro])}}" class="btn btn-outline-primary">¡Lo quiero!</a>
      </div>
      <div class="col-md-6">
        <a href="#" class="btn btn-outline-secondary">¡Lo tengo!</a>
      </div>
  </div>

  </div>
</div>
@endforeach
  </div>
</div>
@else
<div class="container">
<div class="card">
  <h1>No hay libros :(</h1>
  <br>
  <h4>Revisa la plataforma mas tarde o si tienes un libro de este tipo subelo a Thoth :D</h4>
  <br>
  <div class="container">
    <a href="{{route('categorias.catalogo')}}"  class="btn btn-outline-dark">Regresar</a>
  </div>
</div>
</div>

@endif
  </body>
</html>
@endsection
