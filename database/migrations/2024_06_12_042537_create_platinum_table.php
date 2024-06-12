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
            $table->string('platinum_name')->nullable();
            $table->date('platinum_date_of_birth')->nullable();
            $table->string('platinum_gender')->nullable();
            $table->string('platinum_race')->nullable();
            $table->string('platinum_citizenship')->nullable();
            $table->string('platinum_religion')->nullable();
            $table->string('platinum_marital_status')->nullable();
            $table->string('platinum_employment_status')->nullable();
            $table->string('platinum_monthly_income')->nullable();
            $table->string('platinum_address')->nullable();
            $table->string('platinum_phone_num')->nullable();
            $table->string('platinum_email')->unique()->nullable();
            $table->string('platinum_password')->nullable();
            $table->string('platinum_education_level')->nullable();
            $table->string('platinum_field_of_expertise')->nullable();
            $table->string('platinum_university')->nullable();
            $table->string('platinum_supervisor')->nullable();
            $table->string('platinum_supervisor_email')->nullable();
            $table->string('platinum_package_type')->nullable();
            $table->rememberToken()->nullable();
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
