<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='events';
    public $timestamps=false;
    protected $fillable=[
        'id', 'users_id','name', 'description', 'balance', 'needed_balance'
    ];

    protected $primaryKey='id';
}
