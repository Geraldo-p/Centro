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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('genero', 50);
            $table->date('data_nascimento');
            $table->string('estado_civil', 50);
            $table->string('nacionalidade', 100);
            $table->string('provincia', 100);
            $table->string('municipio', 100);
            $table->string('bi', 16)->nullable();

            $table->string('cargo', 100);
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('data_contratacao')->nullable();
            $table->string('foto', 255)->nullable();
            $table->string('nivel_escolaridade', 100);
            $table->string('linguas', 100)->nullable();

            $table->string('nome_banco', 100)->nullable();
            $table->integer('num_conta_banco')->nullable();
            $table->string('iban', 30)->nullable();

            $table->string('status', 50)->default("Activo");
            $table->string('documento')->nullable();

            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->unsignedBigInteger('contacto_id')->nullable();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->unsignedBigInteger('id_us');

            // Definição das chaves estrangeiras
            $table->foreign('departamento_id')->references('id')->on('departamentos');
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
        Schema::dropIfExists('funcionarios');
    }
};
