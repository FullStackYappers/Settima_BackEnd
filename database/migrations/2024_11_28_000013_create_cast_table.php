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
        Schema::create('cast', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained("movie")->onDelete('cascade');
            $table->foreignId('person_id')->constrained('person')->onDelete('cascade');
            $table->string('character_name')->nullable();
            $table->timestamps();
            $table->primary(['movie_id', 'person_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cast');
    }
};
