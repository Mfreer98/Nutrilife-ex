<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutricionista extends Model
{
    use HasFactory;

    protected $fillable = [
        'tel'
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
