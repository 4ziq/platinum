<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mentor extends Authenticatable
{
    use HasFactory;
    public $table = 'mentor';

    public function getAuthPassword(){
        return $this->mentor_password;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'mentor_password' => 'hashed',
        ];
    }
}
