<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table='accounts';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name', 'balance','users_id'
    ];

    protected $primaryKey='id';
}
