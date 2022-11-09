<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $postcode
 * @property string $status
 * @property int $district_id
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class AddressWard extends Model
{
    use SoftDeletes;

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
