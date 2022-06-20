<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students1 extends Model
{
    use HasFactory;
    protected $table='mydetails';
    public static function readTbl(){
        return self::all();
    }
}
