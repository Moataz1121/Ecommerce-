<?php

namespace App\Models;

use App\Http\Controllers\BestController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function bestproducts() {
        return $this->hasMany(BestController::class);
    }
}
