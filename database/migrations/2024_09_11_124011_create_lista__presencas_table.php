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
        Schema::create('lista__presencas', function (Blueprint $table) {
            $table->id();
            $table->date("data_presenca");
            $table->string("presenca", 100);
            $table->unsignedBigInteger('modulo_id');
            $table->unsignedBigInteger('formando_id');
            $table->unsignedBigInteger('id_us');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table->foreign('formando_id')->references('id')->on('formandos');
            $table->foreign('id_us')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lista__presencas');
    }
};
