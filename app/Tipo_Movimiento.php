<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Movimiento extends Model
{
    protected $table='movement_types';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name'
    ];

    protected $primaryKey='id';
}
