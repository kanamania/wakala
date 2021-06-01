<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressDistrict extends Model
{
    protected $table = 'address_districts';

    public function setNameAttribute($value): void
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }
    public function region()
    {
        return $this->belongsTo(AddressRegion::class, 'region_id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'district_id');
    }
}
