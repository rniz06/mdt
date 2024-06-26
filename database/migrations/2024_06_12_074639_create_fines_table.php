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
        Schema::create('fines', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_multa')->unique()->nullable();
            $table->string('n_boleta')->unique()->nullable();

            // Campos correspondientes al vehiculo
            $table->string('vehiculo')->nullable();
            $table->string('chapa_vehiculo')->nullable();
            $table->string('lugar')->nullable();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha_infraccion')->nullable();

            // Campos correspondientes al infractor
            $table->string('conductor')->nullable();
            $table->string('conductor_ci')->nullable();
            $table->string('conductor_municipio')->nullable();
            $table->string('propietario')->nullable();
            $table->string('propietario_ci')->nullable();

            // Campos correspondientes a la multa
            $table->enum('state', ['Generado', 'Cargado', 'Pagado', 'Anulado'])->default('Generado');
            $table->dateTime('cargado_el')->nullable();
            $table->string('mot_anulacion')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('cargado_por')->nullable();
            $table->foreign('cargado_por')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('generate_by')->nullable();
            $table->foreign('generate_by')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('anulado_por')->nullable();
            $table->foreign('anulado_por')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};
