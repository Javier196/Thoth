@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .tarjeta{
        background-color: #848484;
        border-radius: 35px 35px 35px 35px;
-moz-border-radius: 35px 35px 35px 35px;
-webkit-border-radius: 35px 35px 35px 35px;
border: 0px solid #000000;
      }

      .tapa{
        -webkit-box-shadow: -6px -2px 50px 1px rgba(255,255,255,0.81);
      -moz-box-shadow: -6px -2px 50px 1px rgba(255,255,255,0.81);
      box-shadow: -6px -2px 50px 1px rgba(255,255,255,0.81);
        border-radius: 15px;
        width: 100%;
      border-top-left-radius: calc(.25rem - 1px);
      border-top-right-radius: calc(.25rem - 1px);
      margin-top: .5em;
      margin-bottom: .5em;
      }
      .imagen{
        border-radius: 0px 0px 0px 15px ;
      }
      .columna{
        margin-top: 2em;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tarjeta col-md-12">
<div class="row">
  <div class="col-md-2">
    <img class="tapa" style="width: 11rem;" src="/disenosi/storage/app/libros/{{$consulta->imagen_libro}}" alt="Card image cap">
  </div>
  <div class="col-md-10">
    <div class="row">
      <div class="texto col-md-6">
        <p>ISBN: {{$consulta->ISBN}}</p>
        <p>Autor(es): {{$consulta->autor}}</p>
        <p>Editorial: {{$consulta->editorial}}</p>
      </div>
      <div class="texto col-md-6">
        <p>Páginas: {{$consulta->paginas}}</p>
        <p>Edición: {{$consulta->edicion}}</p>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="row">
        <div class="columna card-columns">
          @foreach($solicitudes as $solicitud)
          <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="/disenosi/storage/app/libros/{{$solicitud->imagen_libro}}" alt="Portada del libro">
  <div class="card-body">
    <h5 class="card-title">{{$solicitud->nombre}}</h5>
    <p class="card-text">De: {{$solicitud->autor}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ISBN: {{$solicitud->ISBN}}</li>
    <li class="list-group-item">Editorial: {{$solicitud->editorial}}</li>
    <li class="list-group-item"># de Páginas: {{$solicitud->paginas}}</li>
    <li class="list-group-item">Edición: {{$solicitud->edicion}}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Aceptar</a>
    <a href="{{route('rechazar.solicitudes',['id'=>$solicitud->id_libro, 'id2'=>$consulta->id_libro])}}" class="card-link">Rechazar</a>
    <a href="#" class="card-link">Ver perfil</a>
  </div>
</div>
@endforeach
        </div>
      </div>
    </div>

  </body>
</html>
@endsection
