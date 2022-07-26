<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedProduct extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable  = ['user_id','product_id','name','phone_number','address'];
    public function bookedProduct(){
        return $this->belongsTo(User::class);
    }
  
}
