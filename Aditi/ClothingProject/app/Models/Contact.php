<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table = 'contact';
    protected $fillable = ['name','email','mobile','address'
    
    ];

    public $timestamps = false;
}
