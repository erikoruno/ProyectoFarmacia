<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeUser;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function typeUser()
    {
        return $this->belongsTo(TypeUser::class, 'type_users_id');
    }
}
