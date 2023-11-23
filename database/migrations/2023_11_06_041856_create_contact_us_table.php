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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->integer('sent_by')->nullable();
            $table->string('name_english')->nullable();
            $table->string('name_bangla')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('subject_english')->nullable();
            $table->string('subject_bangla')->nullable();
            $table->string('message_english')->nullable();
            $table->string('message_bangla')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
