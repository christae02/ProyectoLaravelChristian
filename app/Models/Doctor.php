<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'doctor';

    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'cedProf'
    ]; // Obligatoria -> Mass Assigment

    public function direcciones(): HasMany {
        return $this->hasMany(Direcciones::class);
    }

    public function movimientos(): HasMany {
        return $this->hasMany(Movimientos::class);
    }
}