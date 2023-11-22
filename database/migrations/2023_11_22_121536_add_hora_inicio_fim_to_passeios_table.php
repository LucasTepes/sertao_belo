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
        Schema::table('passeios', function (Blueprint $table) {
            $table->time('hora_inicio')->after('duracao');
            $table->time('hora_fim')->after('hora_inicio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('passeios', function (Blueprint $table) {
            //
        });
    }
};
