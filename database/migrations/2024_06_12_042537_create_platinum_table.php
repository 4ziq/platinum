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
        Schema::dropIfExists('platinum'); //added
        Schema::create('platinum', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('race');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('employment_status');
            $table->string('monthly_income');
            $table->string('address');
            $table->string('address');
            $table->string('phone_num');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('education_level');
            $table->string('field_of_expertise');
            $table->string('university');
            $table->string('supervisor');
            $table->string('supervisor_email');
            $table->string('package_type');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinum');
    }
};
