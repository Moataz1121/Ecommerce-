<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'imgae',
        'title',
        'description',
        'salary',
        'category_id'
        
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function cartItem() {
        return $this->hasMany(CartItem::class);
    }
}

