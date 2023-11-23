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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();            
            $table->string('title_english')->nullable();
            $table->string('title_bangla')->nullable();
            $table->string('main_image')->nullable();
            $table->string('price')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('detais_image_1')->nullable();
            $table->string('detais_image_2')->nullable();
            $table->string('detais_image_3')->nullable();
            $table->text('des_sm_eng')->nullable();
            $table->text('des_sm_bng')->nullable();
            $table->longText('long_des1_eng')->nullable();
            $table->longText('long_des1_bng')->nullable();
            $table->longText('long_des2_eng')->nullable();
            $table->longText('long_des2_bng')->nullable();
            $table->longText('long_des3_eng')->nullable();
            $table->longText('long_des3_bng')->nullable();
            $table->string('status')->default(0);     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
