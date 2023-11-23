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
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_english')->nullable();
            $table->string('site_name_bangla')->nullable();
            $table->string('admin_logo_image')->nullable();
            $table->string('frontend_logo_image')->nullable();
            $table->string('frontend_footer_image')->nullable();
            $table->string('favicon_image')->nullable(); 
            $table->string('status')->default(0);          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logos');
    }
};
