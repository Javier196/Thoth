@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nueva Solicitud</title>
    <style media="screen">
    .titulo2, .contenido, .imagen, .tabla{
      background-color: #585858;
      color:#FFFFFF;
    }
    @media screen and (max-width: 600px) {
    .columns {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    align-content: space-around;
    }
    }
    .columns {
    float: center;
    width: 50%;
    padding: 0 100px;
    align-items: center;
    }

    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
    margin-top: .9em
    }
    .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #cacdce;
    }
    .card{ color: #000000}
    .titulo2{
      border-radius: 15px 15px 0px 0px;
      text-align: center;
    }

    .tabla{
      margin-top: .8em;
      margin-bottom: 5%;
      border-radius: 15px;
      text-align: center;
    }
    .contenido{

      border-radius: 0px 0px 15px 0px ;
    }
    .imagen{
      border-radius: 0px 0px 0px 15px ;
    }
    .texto{
      font-size: 20px;
      margin-top: auto;
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
    h1 {
      margin-top: .4em;
      margin-bottom: .4em;
    }
    .fondo-blur{
    position: relative;
    /* overflow: hidden; */
    overflow-x: hidden;
    }
    .fondo-blur::before{
    content: '';
    display: block;
    background: inherit;
    position: absolute;
    width: 100%; height: 100%;
    left: 0; top: 0;
    filter: blur(15px);
    transform: scale(1.2,1.4);
    }
    body {
      background: url("/disenosi/storage/app/libros/{{$consulta->imagen_libro}}")
      no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
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

    </style>
  </head>
  <body class="fondo-blur">
<div class="container">
  <div class="row">
    <div class="titulo2 col-md-12 ">
<h1>{{$consulta->nombre}}</h1>
    </div>
    </div>
    <div class="row">
      <div class="imagen col-md-2">
        <img class="tapa" src="/disenosi/storage/app/libros/{{$consulta->imagen_libro}}" alt="Card image cap">
      </div>
      <div class="contenido col-md-10">
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
<div class="row">
<div class="tabla col-md-12">
  <h1>Intercambiar con:</h1>
  <div class="row">
    <div class="tabla col-md-12">
      <div class="card-columns">
        @foreach($seles as $sele)
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/disenosi/storage/app/libros/{{$sele->imagen_libro}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$sele->nombre}}</h5>
          <a href="{{route('nuevo.solicitudes',['id'=>$sele->id_libro , 'id2'=>$consulta->id_libro])}}" class="btn btn-primary">Seleccionar</a>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Autor: {{$sele->autor}}</li>
          <li class="list-group-item">Editorial: {{$sele->editorial}}</li>
          <li class="list-group-item">Edición: {{$sele->edicion}}</li>
        </ul>
      </div>
      @endforeach
      </div>
    </div>

  </div>
  </div>



</div>
</div>

</div>
  </body>
</html>
@endsection
