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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_english')->nullable();
            $table->string('title_bangla')->nullable();
            $table->longText('details_1_eng')->nullable();
            $table->longText('details_1_bng')->nullable();
            $table->longText('details_2_eng')->nullable();
            $table->longText('details_2_bng')->nullable();
            $table->string('main_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
