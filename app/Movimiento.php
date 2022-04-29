<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table='movements';
    public $timestamps=false;
    protected $fillable=[
        'id', 'account_id','movement_type_id', 'credit_amount', 'debit_amount', 'iva','description','future','m_date'
    ];

    protected $primaryKey='id';
}
