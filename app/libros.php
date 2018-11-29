<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    //
    protected $table = 'libro';
    protected $primaryKey = 'id_libro';
    public $timestamps = false;
    protected $fillable = [
      'ISBN',
      'nombre',
      'autor',
      'editorial',
      'paginas',
      'edicion',
      'id_tipo',
      'imagen_libro',
    ];
}
