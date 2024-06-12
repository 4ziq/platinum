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
        'platinum_date_of_birth',
        'platinum_gender',
        'platinum_race',
        'platinum_citizenship',
        'platinum_religion',
        'platinum_marital_status',
        'platinum_employment_status',
        'platinum_monthly_income',
        'platinum_address',
        'platinum_phone_num',
        'platinum_email',
        'platinum_password',
        'platinum_education_level',
        'platinum_field_of_expertise',
        'platinum_university',
        'platinum_supervisor',
        'platinum_supervisor_email',
        'platinum_package_type',

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
