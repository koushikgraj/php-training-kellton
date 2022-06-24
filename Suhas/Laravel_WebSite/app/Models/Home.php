<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Home extends Model
{
    use HasFactory;
   public $timestamps = false;
   public $table = 'homes';

   protected $fillable=[
    'name',
    'email',
    'DOB',
    'state',
    'city',
    'message'
];
}
