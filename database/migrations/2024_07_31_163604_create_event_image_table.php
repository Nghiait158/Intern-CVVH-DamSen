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
        Schema::create('event_image', function (Blueprint $table) {
            $table->id('eImgID');
            $table->string('eImgName');
            $table->string('eImgPath');
            // $table->foreignId('eID')->constrained('event');
            $table->unsignedBigInteger('eID');
            $table->foreign('eID')->references('eID')->on('event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_image');
    }
};