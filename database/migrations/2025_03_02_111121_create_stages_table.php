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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rally_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->decimal('start_point_lat', 10, 7);
            $table->decimal('start_point_lng', 10, 7);
            $table->decimal('end_point_lat', 10, 7);
            $table->decimal('end_point_lng', 10, 7);
            $table->decimal('length_km', 5, 2);
            $table->enum('surface', ['Asphalt', 'Gravel', 'Mixed']);
            $table->json('route')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
