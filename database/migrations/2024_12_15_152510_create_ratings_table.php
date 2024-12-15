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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('movie_id')->constrained('movie')->onDelete('cascade');
            $table->decimal('acting', 2, 1)->default(0);
            $table->decimal('plot', 2, 1)->default(0);
            $table->decimal('music', 2, 1)->default(0);
            $table->decimal('costume_design', 2, 1)->default(0);
            $table->decimal('cinematography', 2, 1)->default(0);
            $table->decimal('editing', 2, 1)->default(0);
            $table->text('review')->nullable(); // Optional user review
            $table->timestamps();
        
            $table->unique(['user_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
