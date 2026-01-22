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
        Schema::create('existencia', function (Blueprint $table) {
            $table->id();
            $table->string('lote');
            $table->date('fecha_cad');
            $table->integer('existencias');
            
            $table->foreignId('medicamento_id')
                ->nullable()
                ->constrained('medicamento','id')
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
        Schema::dropIfExists('existencia');
    }
};
