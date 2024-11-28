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
        Schema::create('movie_platform', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained("movie")->onDelete('cascade');
            $table->foreignId('platform_id')->constrained("platform")->onDelete('cascade');
            $table->primary(['movie_id', 'platform_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_platform');
    }
};
