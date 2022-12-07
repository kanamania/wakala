<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class AddressRegion extends Model
{
    use SoftDeletes;

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
