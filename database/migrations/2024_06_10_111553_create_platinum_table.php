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
        Schema::create('platinum', function (Blueprint $table) {
            $table->id();
            $table->string('platinum_name');
            $table->date('platinum_date_of_birth');
            $table->string('platinum_gender');
            $table->string('platinum_race');
            $table->string('platinum_citizenship');
            $table->string('platinum_religion');
            $table->string('platinum_marital_status');
            $table->string('platinum_employment_status');
            $table->string('platinum_monthly_income');
            $table->string('platinum_address');
            $table->string('platinum_address');
            $table->string('platinum_phone_num');
            $table->string('platinum_email')->unique();
            $table->string('platinum_password');
            $table->string('platinum_education_level');
            $table->string('platinum_field_of_expertise');
            $table->string('platinum_university');
            $table->string('platinum_supervisor');
            $table->string('platinum_supervisor_email');
            $table->string('platinum_package_type');
            $table->rememberToken();
            $table->timestamps();
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
