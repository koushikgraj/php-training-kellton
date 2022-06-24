<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyMod extends Model
{
    use HasFactory;
    protected $table= 'detail';
    protected $fillable=['name','email','date','contact','country','address','subject','message'];
}
