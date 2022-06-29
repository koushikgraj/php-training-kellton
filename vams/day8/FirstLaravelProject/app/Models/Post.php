<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='student';
    //public $timestamp='false';
    protected $fillable = [
        'city','village','adhar_number',
        'id', 'surname',
        'name','email','mobile',
    ];
}
