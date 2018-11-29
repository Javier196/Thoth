@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>
</head>
<body>
<div class="container">
<h2>Mis Libros</h2>
@foreach($seles as $sele)
<button class="accordion">{{$sele->nombre}}</button>
<div class="panel">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Autor</th>
      <th scope="col">Editorial</th>
      <th scope="col">Páginas</th>
      <th scope="col">Edición</th>
      <th scope="col">Categoría</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$sele->ISBN}}</th>
      <td>{{$sele->autor}}</td>
      <td>{{$sele->editorial}}</td>
      <td>{{$sele->paginas}}</td>
      <td>{{$sele->edicion}}</td>
      <td>{{$sele->id_tipo}}</td>
      <td>Sin interesados</td>
    </tr>
  </tbody>
</table>
</div>
@endforeach

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
</div>
</body>
</html>

@endsection
