@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      h2{
        text-align: center;
      }
    </style>
  </head>
  <body>
<div class="container">
  <div class="row">
<div class="col-md-12">
  <div class="center-block">
    <h2>Solicitudes enviadas</h2>
  </div>
</div>
  </div>
  <div class="row">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id_solicitud</th>
      <th scope="col">Nombre del libro</th>
      <th scope="col">Editorial</th>
      <th scope="col">Numero de páginas</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($solicitudes as $solicitud)
    @if($solicitud->id_status == 1)
    <tr class="table-primary">
    @elseif($solicitud->id_status == 2)
    <tr class="table-warning">
    @elseif($solicitud->id_status == 3)
    <tr class="table-success">
    @elseif($solicitud->id_status == 4)
    <tr class="table-dark">
    @else
    <tr class="table-active">
    @endif
      <th scope="row">{{$solicitud->id_solicitud}}</th>
      <td>{{$solicitud->nombre}}</td>
      <td>{{$solicitud->editorial}}</td>
      <td>{{$solicitud->paginas}}</td>
      @if($solicitud->id_status == 1)
      <td>Pendiente</td>
      @elseif($solicitud->id_status == 2)
      <td>No aprobada</td>
      @elseif($solicitud->id_status == 3)
      <td>Finalizada</td>
      @elseif($solicitud->id_status == 4)
      <td>No aprobada</td>
      @else
      <td>Error</td>
      @endif
    </tr>
@endforeach
  </tbody>
  </table>
  </div>
</div>
  </body>
</html>
@endsection
