<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    public $table = 'form';
    protected $fillable = ['name','email','dob',
    'city', 'state',
    'country','subject','message'
    ];

    public $timestamps = false;
}