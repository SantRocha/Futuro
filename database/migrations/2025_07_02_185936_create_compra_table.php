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
        Schema::create('compra', function (Blueprint $table) {
            $table->id('id_compra');
            $table->string('nome_compra');
            $table->decimal('total_compra', 10, 2)->nullable();
            $table->unsignedBigInteger('id_tipo_compra_fk');
            $table->unsignedBigInteger('user_id');
            $table->enum('pagamento', ['DINHEIRO', 'PIX', 'CARTAO DEBITO', 'CARTAO CREDITO', 'OUTRO'])->nullable();
            $table->timestamps();

            $table->foreign('id_tipo_compra_fk')->references('id_tipo_compra')->on('tipo_compra')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
