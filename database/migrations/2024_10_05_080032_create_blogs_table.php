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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 255);
            $table->string("resumo", 376);
            $table->longText(column: "conteudo");
            $table->string("imagem");
            $table->timestamp("data_publicacao");
            $table->bigInteger(column: "view");
            $table->unsignedBigInteger('id_categ');
            $table->foreign('id_categ')->references('id')->on('categorias');
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
        Schema::dropIfExists('blogs');
    }
};
