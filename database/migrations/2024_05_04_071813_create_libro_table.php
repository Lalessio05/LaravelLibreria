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
        Schema::create('libro', function (Blueprint $table) {
            $table->id();
            $table->char('titolo',100);
            $table->year("annoPubblicazione");
            $table->unsignedBigInteger('idAutore_fk');
            $table->foreign('idAutore_fk')->references('id')->on('Autore');
            $table->unsignedBigInteger('idCasaEditrice_fk');
            $table->foreign('idCasaEditrice_fk')->references('id')->on('casa_editrice');
            $table->unsignedBigInteger('idGenere_fk');
            $table->foreign('idGenere_fk')->references('id')->on('genere');
            $table->char('ISBN',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
