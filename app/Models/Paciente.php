<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable=[
        'height',
        'birthday',
        'weight',
        'waist_hip_relationship',
        'visceral_fat',
        'body_fat',
        'body_mass',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }

    
}
