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
        Schema::create('training_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('phase_id')->constrained()->onDelete('cascade');
            $table->foreignId('training_program_id')->constrained()->onDelete('cascade');
            $table->date('completion_date');
            $table->string('venue_school')->nullable();
            $table->string('certificate_number')->unique()->nullable();
            $table->date('certificate_issued_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_details');
    }
};
