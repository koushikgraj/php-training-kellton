<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nanajimodel extends Model
{

    use HasFactory;
    protected $table="table";
    protected $fillable = ['name','address'];
    //public $timestamps=false;
}
