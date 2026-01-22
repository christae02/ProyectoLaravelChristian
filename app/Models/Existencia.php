<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Existencia extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'existencia';

    protected $fillable = [
        'lote',
        'fecha_cad',
        'existencias',
        'medicamento_id'
    ]; // Obligatoria -> Mass Assigment

    public function medicamento(): BelongsTo {
        return $this->belongsTo(Medicamento::class);
    }

    public function movimientos(): HasMany {
        return $this->hasMany(Movimientos::class);
    }
}