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
        Schema::create('place_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('place_id');
            $table->string('cp')->default('-');
            $table->string('phone')->default('-');
            $table->string('email')->default('-');
            $table->string('web')->default('-');
            $table->string('instagram')->default('-');
            $table->string('youtube')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_details');
    }
};
