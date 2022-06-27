<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class datatb extends Model
{
    use HasFactory;
    protected $table="datatable";

    public static function readTbl()
    {
        return self::all();
    }
}