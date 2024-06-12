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
        Schema::dropIfExists('publications'); //added
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('publication_author')->nullable();
            $table->string('publication_title')->nullable();
            $table->string('publication_genre')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('publication_paper')->nullable();
            $table->string('publication_publisher')->nullable();
            $table->string('publication_keyword')->nullable();
            $table->integer('publication_pages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
