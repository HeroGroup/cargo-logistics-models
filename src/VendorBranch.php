<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class VendorBranch extends Model
{
    protected $fillable = [
        'vendor_id',
        'name',
        'mobile',
        'country',
        'area',
        'block',
        'street',
        'avenue',
        'building_number',
        'floor',
        'unit_number',
        'place_type',
        'latitude',
        'longitude',
		'contact_person'
    ];
	
	public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function getAddress($vendorBranchId)
	{
		$vendorBranch = VendorBranch::find($vendorBranchId);
		return $vendorBranch->country . ' ' . $vendorBranch->area . ' ' . $vendorBranch->block . ' ' . $vendorBranch->street . ' ' . $vendorBranch->avenue . ' ' . $vendorBranch->building_number;
	}
}
