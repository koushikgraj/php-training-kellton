<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function ProductDetail(){
        return $this->hasone(ProductDetail::class);
    }
}
