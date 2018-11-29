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

.skills {
  text-align: right;
  padding: 10px;
  color: white;
}
.reputacion{
  text-align: center;
  padding-top: 8px;
}
h5{text-align: center;}
.php {width: 60%; background-color: #808080;}
</style>
  </head>
  <body>
    <div class="titulo">
    <h2> Mi perfil </h2>
  </div>
  <br>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="nombre">
          <h4>Usuario: {{ Auth::user()->name }}</h4>
          <h4>E-mail: {{ Auth::user()->email}}</h4>
        </div>
        <br>
        <div class="estad">
          <h5> Estadisticas </h5>
      </div>
      <div class="row">
      <div class="col-sm-4">
        <h1>0</h1>
        <p>Numero de libros subidos</p>
      </div>
      <div class="col-sm-4">
        <h1>0</h1>
        <p>Numero de intercambios hechos</p>
      </div>
      <div class="col-sm-4">
        <h1>0%</h1>
        <p>Porcentaje de solicitudes concretadas</p>
      </div>
    </div>
    <br>
    <div class="estad">
      <h5>Reputación</h5>
    </div>
<div class="row">

<div class="col-md-10">
<div class="barra">
  <div class="skills php">60%</div>
</div>
</div>
<div class="col-md-2">
<h4 class="reputacion">Bien</h4>
</div>
        </div>
<br>
<div class="estad">
  <h5>Categorías Preferidas</h5>
  <br>
<div class="row">
  <div class="col-sm-4">
    <div class="card2">
    <h2>Historia</h2>
  </div>
  </div>
  <div class="col-sm-4">
    <div class="card2">
    <h2>Literatura</h2>
  </div>
  </div>
  <div class="col-sm-4">
    <div class="card2">
    <h2>Matemáticas</h2>
  </div>
  </div>
      </div>
  </div>
</div>
  </body>
</html>
@endsection
