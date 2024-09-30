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
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->longText("descricao");
            $table->text("estado"); //lido, nao lido
            $table->date("data_envio")->nullable();
            $table->date("data_recebido")->nullable();
            $table->unsignedBigInteger('recebido_por');
            $table->unsignedBigInteger('id_us');
            $table->foreign('id_us')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagens');
    }
};
