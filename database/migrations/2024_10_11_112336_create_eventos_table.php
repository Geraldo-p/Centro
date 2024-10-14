<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descricao');
            $table->longText('resumo');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->string('local');
            $table->string('imagem');
            $table->string('tipo_evento');
            $table->string('temas');
            $table->enum('status', ['Agendado', 'Concluído', 'Cancelado']);
            $table->text('capacidade')->nullable();
            $table->decimal('custo', 8, 2)->nullable();
            $table->unsignedBigInteger('id_us');
            $table->foreign('id_us')->references('id')->on('users');
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
