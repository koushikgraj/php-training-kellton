<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelname extends Model
{
 use HasFactory;
    protected $table ='tablename';

public static function readTbl()
{
    return self::all();
}
}
