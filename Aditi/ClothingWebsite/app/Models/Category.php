<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table='category';
    protected $guarded=[];
    protected $fillable = [
        'CategoryId','CategoryName','Description','Image','Price'
    ];

    public $timestamps = false;
}
