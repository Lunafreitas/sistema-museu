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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('desc');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('banner')->nullable();

            $table->enum('status', [
                'Agendada',
                'Em andamento',
                'Encerrada'
            ])->default('Agendada');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};