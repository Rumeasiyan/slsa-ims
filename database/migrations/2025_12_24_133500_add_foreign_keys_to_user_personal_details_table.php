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
        Schema::table('user_personal_details', function (Blueprint $table) {
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('set null');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_personal_details', function (Blueprint $table) {
            $table->dropForeign(['district_id']);
            $table->dropForeign(['group_id']);
        });
    }
};
