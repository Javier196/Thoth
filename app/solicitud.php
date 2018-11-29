<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    //
    protected $table = 'solicitud';
    protected $primaryKey = 'id_solicitud';
    public $timestamps = false;
    protected $fillable = [
    'fecha_sol',
    'id_status',
  ];

}
