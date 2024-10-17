<?php

use App\Models\Evento\Evento;
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
        Schema::create('evento_formando', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formando_id')->constrained()->onDelete('cascade');
            $table->foreignId('evento_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_formando');
    }
};
