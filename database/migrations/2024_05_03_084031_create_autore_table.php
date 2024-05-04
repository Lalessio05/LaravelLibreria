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
        Schema::create('autore', function (Blueprint $table) {
            $table->id();
            $table->char('nome',30);
            $table->char('cognome',30);
            $table->date('dataNascita');
            $table->unsignedBigInteger('idNazione_fk');
            $table->foreign('idNazione_fk')->references('id')->on('nazione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autore');
    }
};
