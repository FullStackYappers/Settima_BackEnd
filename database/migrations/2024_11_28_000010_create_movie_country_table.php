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
        Schema::create('movie_country', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained("movie")->onDelete('cascade');
            $table->foreignId('country_id')->constrained("country")->onDelete('cascade');
            $table->primary(['movie_id', 'country_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('country_movie');
    }
};
