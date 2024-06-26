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
        Schema::create('league_clubs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('league_id')->index();
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('league_clubs');
    }
};
