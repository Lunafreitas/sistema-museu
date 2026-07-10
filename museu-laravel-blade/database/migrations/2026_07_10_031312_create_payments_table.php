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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('order_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('ticket_order_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->enum('payment_method', [
                'Pix',
                'Cartão de Crédito',
                'Cartão de Débito',
                'Boleto'
            ]);

            $table->string('transaction_id')->nullable();
            $table->decimal('amount', 10, 2);

            $table->enum('status', [
                'Pendente',
                'Aprovado',
                'Recusado',
                'Reembolsado'
            ])->default('Pendente');

            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};