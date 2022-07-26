<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnBording extends Model
{
    
    protected $table='bankdetails';
    protected $primaryKey = 'id';
    protected $fillable = ['account_type','country','ifsc_code','contact','name','location', 'account_number'];

    // public $timestamps = false;
}
