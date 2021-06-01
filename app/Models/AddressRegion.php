<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressRegion extends Model
{
    protected $table = "address_regions";

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function districts()
    {
        return $this->hasMany(AddressDistrict::class, 'region_id');
    }
}
