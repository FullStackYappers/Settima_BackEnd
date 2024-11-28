<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained("movie")->onDelete('cascade');
            $table->foreignId('genre_id')->constrained("genre")->onDelete('cascade');
            $table->primary(['movie_id', 'genre_id']);

        });
    }
    public function down()
    {
        Schema::dropIfExists('movie_genre');
    }
};
