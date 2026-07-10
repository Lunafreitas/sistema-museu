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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('title');
            $table->longText('desc')->nullable();
            $table->year('ano_criacao')->nullable();
            $table->string('tecnica')->nullable();
            $table->string('dimensoes')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('preview_image')->nullable();

            $table->enum('status', [
                'Em exposição',
                'Em restauração',
                'Armazenada'
            ])->default('Em exposição');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};