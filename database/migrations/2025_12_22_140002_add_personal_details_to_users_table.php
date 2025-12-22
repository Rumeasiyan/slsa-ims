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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained()->onDelete('restrict');
            $table->foreignId('district_id')->constrained()->onDelete('restrict');

            $table->string('full_name');
            $table->string('nic_no', 20)->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 20)->nullable();

            $table->text('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('designation')->nullable();

            $table->string('whatsapp_no', 20)->nullable();
            $table->string('contact_no', 20)->nullable();
            $table->string('profile_image')->nullable();

            $table->boolean('is_approved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['district_id']);
            $table->dropColumn([
                'role_id',
                'district_id',
                'full_name',
                'nic_no',
                'date_of_birth',
                'gender',
                'address',
                'occupation',
                'designation',
                'whatsapp_no',
                'contact_no',
                'profile_image',
                'is_approved',
            ]);
        });
    }
};
