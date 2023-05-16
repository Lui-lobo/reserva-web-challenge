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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('reserva');
            $table->unsignedBigInteger('nome_do_cliente');
            $table->foreign('nome_do_cliente')->references('id')->on('users');
            $table->unsignedBigInteger('mesa_reservada');
            $table->foreign('mesa_reservada')->references('id')->on('mesas');
            $table->unsignedBigInteger('horario_reservado');
            $table->foreign('horario_reservado')->references('id')->on('horarios');
            $table->unsignedBigInteger('preco_hora');
            $table->foreign('preco_hora')->references('id')->on('mesas');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
