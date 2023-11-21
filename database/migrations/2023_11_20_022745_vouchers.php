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
        Schema::create('vouchers', function (Blueprint $table){
            $table->id();
            $table->integer('qtd_adulto');
            $table->integer('qtd_crinca')->nullable();
            $table->integer('qtd_bebe')->nullable();
            $table->time('hora_embarque');
            $table->date('data_passeio');
            $table->decimal('valor_passeio', 10,2);
            $table->text('observacao')->nullable();
            $table->enum('status', ['aprovado','rejeitado','observacao','aberto']);
            $table->foreignId('cliente_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('passeio_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
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
