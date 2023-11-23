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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_english')->nullable();
            $table->string('title_bangla')->nullable();
            $table->text('short_des_eng')->nullable();
            $table->text('short_des_bng')->nullable();
            $table->longText('long_des1_eng')->nullable();
            $table->longText('long_des1_bng')->nullable();
            $table->longText('long_des2_eng')->nullable();
            $table->longText('long_des2_bng')->nullable();
            $table->longText('long_des3_eng')->nullable();
            $table->longText('long_des3_bng')->nullable();
            $table->string('main_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('details_image1')->nullable();
            $table->string('details_image2')->nullable();
            $table->string('details_image3')->nullable();
            $table->integer('status')->default(0);
            $table->integer('add_home')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
