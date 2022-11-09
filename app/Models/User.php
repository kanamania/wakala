<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string|null $email
 * @property int $phone
 * @property int $district_id
 * @property string $ward
 * @property string $street
 * @property string $agent_name
 * @property string $agent_number
 * @property string|null $super_agent_name
 * @property string|null $super_agent_number
 * @property string $password
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'district_id',
        'ward',
        'street',
        'agent_name',
        'agent_number',
        'super_agent_name',
        'super_agent_number',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'name'
    ];

    public function getNameAttribute()
    {
        return $this->firstname.' '.$this->lastname;
    }
}
