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
        Schema::create('troops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->foreignId('troop_leader')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('troop_created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('troop_updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('troop_deleted_at')->nullable();
            $table->foreignId('troop_deleted_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troops');
    }
};
