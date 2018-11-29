@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    h1{text-align: center;}
      .list-group-item
      {
        color: #000000;
      }
      .centro
      {
        padding: 10%;
        padding-left: 25%;
      }
      .pagination {
    display: inline-block;
}


    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Solicitudes Recibidas</h1>
        </div>
      </div>
<div class="row">
  <div class="card-columns">
    @foreach($nsolicitud as $sol)
    <div class="col-md-12">
      <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/disenosi/storage/app/libros/{{$sol->imagen_libro}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$sol->nombre}}</h5>
      <p class="card-text">Numero de solicitudes: {{$sol->total}}</p>
      <a href="{{route('ver.solicitudes',['id'=>$sol->id_libro])}}" class="btn btn-primary">Ver Solicitudes</a>
    </div>
    </div>
    </div>
    @endforeach
  </div>
</div>


    </div>
  </body>
</html>
@endsection
