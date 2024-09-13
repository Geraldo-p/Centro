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
        Schema::create('formandos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('genero', 50)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('estado_civil', 50)->nullable();
            $table->string('nacionalidade', 100)->nullable();
            $table->string('provincia', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('bi', 16)->nullable();

            $table->string('instituicao')->nullable();
            $table->string('nivel_escolaridade', 100)->nullable(); //1º ano faculdade
            $table->string('curso', 100)->nullable();
            $table->string('periodo', 100)->nullable(); //manha, tarde, noite
            $table->string('situacao', 100)->nullable(); //estudando, terminado

            $table->string('foto')->nullable();
            $table->text(column: 'num_formando');



            $table->unsignedBigInteger('contacto_id')->nullable();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->unsignedBigInteger('id_us');

            $table->foreign('contacto_id')->references('id')->on('contactos');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('id_us')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formandos');
    }
};
