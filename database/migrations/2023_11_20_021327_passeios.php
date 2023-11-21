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
        Schema::create('passeios', function (Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->integer('duracao');
            $table->string('cidade');
            $table->string('img')->nullable();
            $table->decimal('valor_crianca',10,2);
            $table->decimal('valor_bebe',10,2);
            $table->decimal('valor_adulto',10,2);
            $table->enum('status', ['on','off']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
