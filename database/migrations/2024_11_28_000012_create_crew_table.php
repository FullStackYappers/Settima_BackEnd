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
        Schema::create('crew', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained("movie")->onDelete('cascade');
            $table->foreignId('person_id')->constrained('person')->onDelete('cascade');
            $table->foreignId('department_id')->constrained("department")->onDelete('cascade');
            $table->timestamps();
            $table->primary(['movie_id', 'person_id', 'department_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crew');
    }
};
