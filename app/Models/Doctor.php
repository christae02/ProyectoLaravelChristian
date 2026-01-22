<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'doctor';

    protected $fillable = [
        'nombre',
        'apelldioPaterno',
        'apelldioMaterno',
        'cedProf'
    ]; // Obligatoria -> Mass Assigment

    public function direcciones(): HasMany {
        return $this->hasMany(Direcciones::class);
    }

    public function movimientos(): HasMany {
        return $this->hasMany(Movimientos::class);
    }
}