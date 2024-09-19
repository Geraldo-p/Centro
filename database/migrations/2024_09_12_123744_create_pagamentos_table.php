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
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 50)->nullable(); // transferencia, dinheiro em mão
            $table->string('comprovativo', 255)->nullable(); // documento
            $table->date('data_pagamento')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->decimal('em_falta', 10, 2)->nullable();
            $table->integer('percentagem')->nullable(); // 50%, 70%, 100%
            $table->string('estado', 100)->nullable(); // em falta, pago

            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('formando_id')->nullable();
            $table->unsignedBigInteger('id_us')->nullable();
            $table->foreign('formando_id')->references('id')->on('formandos')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('id_us')->references('id')->on('users');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
