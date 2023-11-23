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
        Schema::Create('clientes', function (Blueprint $table){
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->date('data_nasci');
            $table->char('cpf', 11);
            $table->string('rg', 12);
            $table->string('cidade');
            $table->char('estado', 2);
            $table->string('telefone', 11);
            $table->foreignId('nacionalidade_id')->constrained()->onDelete('cascade')->onUpdate('restrict');
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
