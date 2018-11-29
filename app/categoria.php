<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;
    protected $fillable = [
      'Tipo_categoria',
      'Imagen',
      'descripcion',
    ];
}
