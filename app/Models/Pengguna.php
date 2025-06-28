<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
        'saldo',
        'remember_token',
        'photo',
        'photo'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'saldo' => 'decimal:2',
    ];
}
