<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePage extends Model
{
    protected $table = 'ProfilePage';
    protected $fillable = ['name','contact','address','email','dob','employee_id','date_of_joining','company_name','location','employee_type'
    
    ];

    public $timestamps = false;
}