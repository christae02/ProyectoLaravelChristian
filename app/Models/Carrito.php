<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrito extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'carrito';

    protected $fillable = [
        'existencia_id',
        'cantidad'
    ]; // Obligatoria -> Mass Assigment

    public function existencia(): BelongsTo {
        return $this->belongsTo(Existencia::class);
    }
}
