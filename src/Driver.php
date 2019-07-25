<?php

namespace CargoLogisticsModels\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'transport_mode',
        'driver_type',
        'fixed_commission',
        'commission_percent',
        'licence_file',
        'licence_expiration_date',
        'account_status',
    ];

    public function vendors()
    {
        return $this->hasMany(VendorDriver::class);
    }

}