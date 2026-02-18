<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimientos extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'movimientos';

    protected $fillable = [
        'tipo',
        'cantidad',
        'fecha',
        'receta',
        'existencia_anterior',
        'nueva_existencia',
        'existencia_id',
        'doctor_id',
        'domicilio'
    ]; // Obligatoria -> Mass Assigment

    public function existencia(): BelongsTo {
        return $this->belongsTo(Existencia::class);
    }

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class);
    }
}