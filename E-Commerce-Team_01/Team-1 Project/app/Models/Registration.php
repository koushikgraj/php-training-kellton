<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table='registration';
    protected $fillable = [
        'name','email', 'password',
    ];
}
