<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;

    // Relacion uno a muchos

    public function cursos(){

        return $this->hasMany(curso::class);
    }
}

