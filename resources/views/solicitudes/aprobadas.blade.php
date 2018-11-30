@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    .fondo{
      filter: blur(6px);
    }
  </style>
  <body>
<div class="container">
  <div class="card-columns">
@foreach($aprobadas as $aprobada)
    <div class="card bg-dark text-white">
  <img class="fondo card-img" src="/disenosi/storage/app/libros/{{$aprobada->imagen_libro}}" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">{{$aprobada->nombre}}</h5>
    <p class="card-text">{{$aprobada->ISBN}}</p>
    <p class="card-text">{{$aprobada->autor}}</p>
    <p class="card-text">{{$aprobada->editorial}}</p>
    <p class="card-text">{{$aprobada->paginas}}</p>
    <p class="card-text">{{$aprobada->edicion}}</p>
    <a href="{{route('chat.solicitudes')}}" class="btn btn-primary">Ir al Chat</a>
  </div>
</div>
@endforeach
  </div>
</div>
  </body>
</html>
@endsection
