<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = ['name', 'email', 'password', 'photo_url'];

    // Pastikan password dienkripsi
    protected $hidden = ['password', 'remember_token'];

    // Relasi dengan Todo
    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    // Menambahkan setter untuk password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
