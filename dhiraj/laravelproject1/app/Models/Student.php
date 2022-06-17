<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ='subject';

public static function readTbl()
{
    return self::all();
}
// function getStudent(){
//     foreach(Subject::readTbl() as $tblObj) {
//         echo $tblObj->Subject;
// echo "<br>";
}


