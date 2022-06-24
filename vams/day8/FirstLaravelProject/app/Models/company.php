<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table="employee";

    public $timestamps=false;

    public static function readTb1()
    {
        return self::all();
    }

}
