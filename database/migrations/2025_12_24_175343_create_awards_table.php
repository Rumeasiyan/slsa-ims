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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('award_section', 20)->index();
            $table->string('group_code', 50)->index();
            $table->string('code', 10);
            $table->string('award_name', 100);
            $table->enum('category', ['Adult', 'Youth', 'Training']);
            $table->timestamps();

            $table->unique(['award_section', 'code'], 'unique_award');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
