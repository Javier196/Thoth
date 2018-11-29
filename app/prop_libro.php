<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prop_libro extends Model
{
    //
    protected $table = 'prop_libro';
    protected $primaryKey = 'id_prop';
    public $timestamps = false;
    protected $fillable = [
      'id_user',
      'id_libro',
      'fecha',
    ];

}
