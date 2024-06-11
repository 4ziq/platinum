<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Platinum extends Authenticatable
{
    // use HasFactory;
    public $table = 'platinum';

    protected $fillable = [
        'platinum_name',
        'platinum_email',
        'platinum_password',

    ];

    // protected $hidden = [
    //     'platinum_password',
    //     'remember_token',
    // ];

    // protected $guarded = [];

    public function getAuthPassword(){
        return $this->platinum_password;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'platinum_password' => 'hashed',
        ];
    }
}
