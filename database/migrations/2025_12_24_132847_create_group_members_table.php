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
        Schema::create('group_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_positions_id')->constrained('member_positions')->onDelete('cascade');
            $table->date('member_start_date')->nullable();
            $table->date('member_end_date')->nullable();
            $table->foreignId('member_created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('member_renewed_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('member_renewed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_members');
    }
};
