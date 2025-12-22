<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('member_categories')->onDelete('restrict');
            $table->date('membership_date');
            $table->date('renewal_date')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'category_id']);
        });

        DB::statement('ALTER TABLE member_details ADD CONSTRAINT check_renewal_date CHECK (renewal_date IS NULL OR renewal_date >= membership_date)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_details');
    }
};
