<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;
    public $table = 'staff';
    public function getAuthPassword(){
        return $this->staff_password;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'staff_password' => 'hashed',
        ];
    }
}
