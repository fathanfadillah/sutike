<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RajaOngkirProvince extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'raja_ongkir_provinces';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'code',
        'name'
    ];
}
