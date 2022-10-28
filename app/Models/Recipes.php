<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
class Recipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'instructions',
        'servings',
        'notes',
    ];

    public function ingredients(){
        return $this->hasMany(Food::class);
    }
}
