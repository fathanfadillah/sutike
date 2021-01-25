<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBillingAddress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_billing_address';

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
        'user_id',
        'firstname',
        'lastname',
        'country',
        'address',
        'province_id',
        'city_id',
        'postal_code',
        'phone_number',
        'email'
    ];

    /**
     * Get RajaOngkirProvince.
     */
    public function raja_ongkir_provinces()
    {
        return $this->belongsTo('App\RajaOngkirProvince', 'province_id');
    }

     /**
     * Get RajaOngkirCity.
     */
    public function raja_ongkir_cities()
    {
        return $this->belongsTo('App\RajaOngkirCity', 'city_id');
    }
}
