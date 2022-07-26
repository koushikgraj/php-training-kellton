<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table='admins';
    protected $fillable = [
        'email', 'password',
    ];
}
