<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    // Getters
    public function fullName(): string {
        return "$this->nombre $this->apellidoPaterno $this->apellidoMaterno";
    }

    // Accessors y Mutators
    public function nombre() : Attribute {
        return Attribute::make(
            get: fn($value) => "$value $this->apellidoPaterno $this->apellidoMaterno",
            set: fn($value) => mb_strtoupper($value),
        );
    }

    public function direcciones(): HasMany {
        return $this->hasMany(Direcciones::class);
    }

    public function movimientos(): HasMany {
        return $this->hasMany(Movimientos::class);
    }
}
