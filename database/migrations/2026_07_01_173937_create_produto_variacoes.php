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
        Schema::create('produto_variacoes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('produto_id')
                ->constrained('produtos')
                ->cascadeOnDelete();

            $table->foreignId('cor_id')
                ->constrained('cores')
                ->cascadeOnDelete();
            
            $table->foreignId('tamanho_id')
            ->constrained('tamanhos')
            ->cascadeOnDelete();

            $table->string('sku')->unique()->nullable();

            $table->unsignedInteger('estoque')->default(0);

            // Imagem do produto
            $table->string('imagem')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_variacoes');
    }
};
