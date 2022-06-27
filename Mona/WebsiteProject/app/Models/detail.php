<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    //public $table = 'details';
    protected $fillable = ['name','email','date',
    'city', 'state',
    'country','subject','message'
    ];
    public $timestamps = false;
}
