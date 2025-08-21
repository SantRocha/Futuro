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
        Schema::create('items_compra', function (Blueprint $table) {
            $table->id('id_item');
            $table->string('nome_item');
            $table->decimal('preco_item', 10, 2);
            $table->integer('quantidade_item');
            $table->unsignedBigInteger('id_compra_fk');
            $table->timestamps();

            $table->foreign('id_compra_fk')->references('id_compra')->on('compra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_compra');
    }
};
