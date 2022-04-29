<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Deuda extends Model
{
    protected $table='debts';
    public $timestamps=false;
    protected $fillable=[
        'id', 'users_id','name', 'description', 'amount', 'monthly_fee'
    ];

    protected $primaryKey='id';
}
