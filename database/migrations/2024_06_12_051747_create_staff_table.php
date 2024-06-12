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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->string('staff_email')->unique();
            $table->string('staff_phone_num');
            $table->string('staff_password');
            $table->string('staff_date_of_birth');
            $table->string('staff_citizenship');
            $table->string('staff_gender');
            $table->string('staff_religion');
            $table->string('staff_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
