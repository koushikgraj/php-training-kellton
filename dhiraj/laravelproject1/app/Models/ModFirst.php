<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModFirst extends Model
{
    use HasFactory;
    protected $table = 'table';
    public $timestamp=false;

    public static function readTbl()
    {
        return self::all();
    }
}
