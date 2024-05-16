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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('title',100);
            $table->year("publication_year");
            $table->unsignedBigInteger('author_id_fk');
            $table->foreign('author_id_fk')->references('id')->on('authors');
            $table->unsignedBigInteger('publisher_id_fk');
            $table->foreign('publisher_id_fk')->references('id')->on('publishers');
            $table->unsignedBigInteger('genre_id_fk');
            $table->foreign('genre_id_fk')->references('id')->on('genres');
            $table->char('ISBN',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
