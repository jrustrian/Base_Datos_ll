<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
    protected $table='realized_movements';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name','type', 'credit_amount', 'debit_amount', 'iva','description','m_date'
    ];

    protected $primaryKey='id';
}
