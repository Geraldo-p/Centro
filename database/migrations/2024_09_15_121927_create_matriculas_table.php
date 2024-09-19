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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('turma_id');
            $table->unsignedBigInteger('formando_id');
            $table->unsignedBigInteger('id_us');

            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete("cascade");
            $table->foreign('formando_id')->references('id')->on('formandos')->onDelete("cascade");
            $table->foreign('id_us')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
