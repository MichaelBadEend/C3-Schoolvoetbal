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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('match_location');
            $table->integer('match_time');
            $table->integer('match_round');
            $table->foreignId('team_1_id')->references('id')->on('teams');
            $table->foreignId('team_2_id')->references('id')->on('teams');
            $table->integer('score_team_1');
            $table->integer('score_team_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
