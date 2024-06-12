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
        Schema::create('mentor', function (Blueprint $table) {
            $table->id();
            $table->string('mentor_name');
            $table->string('mentor_email')->unique();
            $table->string('mentor_phone_num');
            $table->string('mentor_password');
            $table->string('mentor_date_of_birth');
            $table->string('mentor_citizenship');
            $table->string('mentor_gender');
            $table->string('mentor_religion');
            $table->string('mentor_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor');
    }
};
