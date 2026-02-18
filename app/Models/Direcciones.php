<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direcciones extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'direcciones';

    protected $fillable = [
        'domicilio',
        'doctor_id'
    ]; // Obligatoria -> Mass Assigment

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class);
    }
}