<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'qualification';
    protected $fillable = ['Course','University','Academic_year','Year_of_passing','Percentage','id'
    
    ];

    public $timestamps = false;
}