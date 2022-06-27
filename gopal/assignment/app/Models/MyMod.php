<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyMod extends Model
{
    use HasFactory;
    public $table='webdata';
    protected $fillable=['name','email','dob','city','state','country','subject','message'];
}
