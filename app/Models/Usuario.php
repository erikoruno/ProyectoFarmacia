<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeUser;
use Illuminate\Support\Str;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'direccion',
        'email',
        'password',
        'edad',
        'type_users_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($usuario) {
            $usuario->email_verified_at = now();
            $usuario->remember_token = Str::random(60);
        });
    }

    public function typeUser()
    {
        return $this->belongsTo(TypeUser::class, 'type_users_id');
    }
}
