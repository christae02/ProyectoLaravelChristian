<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicamento extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'medicamento';

    protected $fillable = [
        'nombre',
        'presentacion',
        'imagen'
    ]; // Obligatoria -> Mass Assigment

    public function existencia(): HasMany{
        return $this->hasMany(Existencia::class);
    }

    public const CREATED_AT = 'created_at'; // Solo en caso de que sea otro nombre
    public const UPDATED_AT = 'updated_at';
    public const DELETED_AT = 'deleted_at';
}