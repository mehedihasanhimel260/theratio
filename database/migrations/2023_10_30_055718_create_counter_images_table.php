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
        Schema::create('counter_images', function (Blueprint $table) {
            $table->id();
            $table->string('title_english_1')->nullable();
            $table->string('title_bangla_1')->nullable();
            $table->string('value_1')->nullable();
            $table->string('image_1')->nullable();

            $table->string('title_english_2')->nullable();
            $table->string('title_bangla_2')->nullable();
            $table->string('value_2')->nullable();
            $table->string('image_2')->nullable();

            $table->string('title_english_3')->nullable();
            $table->string('title_bangla_3')->nullable();
            $table->string('value_3')->nullable();
            $table->string('image_3')->nullable();

            $table->string('title_english_4')->nullable();
            $table->string('title_bangla_4')->nullable();
            $table->string('value_4')->nullable();
            $table->string('image_4')->nullable();

            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counter_images');
    }
};
