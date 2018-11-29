<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sol_propietario extends Model
{
    //
    protected $table = 'sol_propietario';
    protected $primaryKey = 'id_sol_prop';
    public $timestamps = false;
    protected $fillable = [
    'id_solicitud',
    'id_user',
    'id_libro',
    ];
}
