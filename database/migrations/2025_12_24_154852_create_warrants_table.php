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
        Schema::create('warrants', function (Blueprint $table) {
            $table->id();
            $table->string('warrant_no')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_position_id')->constrained('member_positions')->onDelete('cascade');
            $table->foreignId('warrant_request_id')->nullable()->constrained('warrant_requests')->onDelete('set null');
            $table->date('started_date');
            $table->date('renewed_date')->nullable();
            $table->enum('status', ['active', 'expired', 'renewed', 'cancelled'])->default('active');
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warrants');
    }
};
