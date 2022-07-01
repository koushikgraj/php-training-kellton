<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Htttp\Controllers\Student;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=[
        'name','email','state'
    ];
}
