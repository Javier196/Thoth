<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sol_solicitante extends Model
{
    //
    protected $table = 'sol_solicitante';
    protected $primaryKey = 'id_sol_sol';
    public $timestamps = false;
    protected $fillable = [
    'id_solicitud',
    'id_user',
    'id_libro',
    ];
}
