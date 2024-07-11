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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('duracao', 255)->nullable(); //1, 2, 3 ou 4 meses
            $table->text('foto')->nullable();
            $table->decimal('preco', 10, 2);
            $table->decimal('pag_mes', 10, 2); //valor pago por mes
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->text('descricao')->nullable();

            $table->unsignedBigInteger('id_us');
            $table->foreign('id_us')->references('id')->on('users');

            $table->unsignedBigInteger('id_categ');
            $table->foreign('id_categ')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
