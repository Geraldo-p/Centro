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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('sala_id');
            $table->unsignedBigInteger('funcionario_id'); // selecionar apenas formadores no select
            $table->time('horario_ENTRADA', 50);
            $table->time('horario_SAIDA', 50);
            $table->string('status', 50)->default("Disponivel"); //disponivel, indisponivel, cheia
            $table->unsignedBigInteger('id_us');

            // $table->foreign('sala_id')->references('id')->on('salas')->onDelete('cascade');
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('id_us')->references('id')->on('users');

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
