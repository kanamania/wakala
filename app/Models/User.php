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
 * @property string $name
 * @property string $email
 * @property int|null $phone
 * @property string $password
 * @property string $token
 * @property int $created_by
 * @property int $modified_by
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'token',
        'password',
        'created_by',
        'modified_by',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'name'
    ];

    public function getNameAttribute()
    {
        return $this->firstname.' '.$this->lastname;
    }
}
