<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class AddressDistrict extends Model
{
    use SoftDeletes;

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
