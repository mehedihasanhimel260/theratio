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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name_english')->nullable();
            $table->string('name_bangla')->nullable();
            $table->string('desig_eng')->nullable();
            $table->string('desig_bng')->nullable();
            $table->longText('review_eng')->nullable();
            $table->longText('review_bng')->nullable();
            $table->integer('star')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default();
            $table->integer('add_home')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
