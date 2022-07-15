<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'skills';
    protected $fillable = ['Programming_language','Proficiency_level','Certificate','Work_experience','id'
    
    ];

    public $timestamps = false;
}