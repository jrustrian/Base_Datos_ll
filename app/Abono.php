<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    protected $table='debt_payments';
    public $timestamps=false;
    protected $fillable=[
        'id', 'debt_id', 'movement_id'
    ];

    protected $primaryKey='id';
}
