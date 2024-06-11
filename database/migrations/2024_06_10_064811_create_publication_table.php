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
        Schema::create('publication', function (Blueprint $table) {
            $table->id();
            $table->string('publication_author');
            $table->string('publication_title');
            $table->string('publication_genre');
            $table->date('publication_date');
            $table->string('publication_paper');
            $table->string('publication_publisher');
            $table->string('publication_keyword');
            $table->integer('publication_pages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication');
    }
};
