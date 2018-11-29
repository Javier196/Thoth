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
    <h2>Nuevo libro</h2>
    <br>
      <form class="form-horizontal" role="form" method="POST" action="{{route('guardar.save')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
<div class="form-group">
 <label  class="control-label col-sm-2" >ISBN</label>
 <div class="col-sm-8">
   <input type="number" class="form-control" placeholder="International Standard Book Number" id="ISBN" name="ISBN">
 </div>
</div>
<div class="form-group">
 <label class="control-label col-sm-2" for="empresa">Nombre</label>
 <div class="col-sm-8">
   <input type="text" class="form-control" id="nombre" placeholder="Nombre del libro" name="nombre">
 </div>
</div>
<div class="form-group">
 <label class="control-label col-sm-2" for="empresa">Autor(es)</label>
 <div class="col-sm-8">
   <input type="text" class="form-control" id="autor" placeholder="Autores separados por coma" name="autor">
 </div>
</div>
<div class="form-group">
 <label class="control-label col-sm-2" for="editorial">Editorial</label>
 <div class="col-sm-8">
   <input type="text" class="form-control" id="editorial" placeholder="Editorial" name="editorial">
 </div>
</div>
<div class="form-group">
 <label  class="control-label col-sm-2" for="no_tarjeta">Páginas</label>
 <div class="col-sm-8">
   <input type="number" class="form-control" id="paginas" placeholder="numero total" name="paginas" min="1">
 </div>
</div>
<div class="form-group">
 <label  class="control-label col-sm-2" for="no_tarjeta">Edición</label>
 <div class="col-sm-8">
   <input type="number" class="form-control" id="edicion" placeholder="Edicion numero" name="edicion" min="1" max="100">
 </div>
</div>
<div class="form-group">
 <label  class="control-label col-sm-2" for="no_tarjeta">Categoría de libro</label>
 <div class="col-sm-8">
   <select class="form-control" name="id_tipo" id="id_tipo" placeholder="Seleccione una Categoria">
     @foreach($categ as $cat)
     <option value="{{$cat->id_categoria}}">{{$cat->Tipo_categoria}}</option>
     @endforeach
   </select>
 </div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Portada</label>
<div class="col-md-6">
    <input type="file" accept="image/*" class="form-control"  id="imagen_libro" name="imagen_libro" >
    </div>
    </div>
<div class="form-group">
 <div class="col-sm-offset-5 col-sm-8">
   <button type="submit" class="btn btn-primary">Guardar</button>
 </div>
</div>
</form>
</div>

  </body>
</html>

@endsection
