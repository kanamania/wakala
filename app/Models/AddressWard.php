<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressWard extends Model
{
    protected $table = "address_wards";

    protected $fillable = [
        'name',
        'postcode',
        'status',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }
    public function district()
    {
        return $this->belongsTo(AddressDistrict::class, 'district_id');
    }

}
