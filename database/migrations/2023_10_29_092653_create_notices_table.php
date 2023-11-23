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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('pdf_file')->nullable();
            $table->text('short_des_eng')->nullable();
            $table->text('short_des_bng')->nullable();
            $table->text('long_des_eng')->nullable();
            $table->text('long_des_bng')->nullable();
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
        Schema::dropIfExists('notices');
    }
};
