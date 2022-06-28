<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $table='websites';
    public $timestamp=false;
    protected $fillable=['name','email','dob','city','state','country','subject'];
}
