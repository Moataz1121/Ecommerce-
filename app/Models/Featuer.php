<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featuer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'description'
    ];
}
