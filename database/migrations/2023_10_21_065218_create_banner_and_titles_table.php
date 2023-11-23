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
        Schema::create('banner_and_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title_english')->nullable();
            $table->string('title_bangla')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('page')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_and_titles');
    }
};
