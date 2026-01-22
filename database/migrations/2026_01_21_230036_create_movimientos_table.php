<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo',['entrada','salida']);
            $table->integer('cantidad');
            $table->date('fecha');
            $table->string('receta');
            $table->integer('existencia_anterior');
            $table->integer('nueva_existencia');
            
            $table->foreignId('existencias_id')
                ->nullable()
                ->constrained('existencia','id')
                ->nullOnDelete();

            $table->foreignId('doctor_id')
                ->nullable()
                ->constrained('doctor','id')
                ->nullOnDelete();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
