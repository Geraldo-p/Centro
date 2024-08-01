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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua', 150)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('provincia', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('enderecoDetalhado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
