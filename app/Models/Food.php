<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'name',
        'carbs',
        'protein',
        'fat',
        'calories',
        'sugar',
        'sodium',
        'is_active'
    ];
}
