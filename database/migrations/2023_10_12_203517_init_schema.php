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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_score', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->integer('score')->default(0);
            $table->integer('balance')->default(5);
        });

        Schema::create('user_stats', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->integer('number_of_wins')->default(0);
            $table->integer('number_of_runner_ups')->default(0);
        });

        Schema::create('leaderboard', function (Blueprint $table) {
            $table->id();

            $table->date('end_date');

            $table->string('winner_id');
            $table->foreign('winner_id')->references('user_id')->on('users');

            $table->string('runner_up_id');
            $table->foreign('runner_up_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboard');
        Schema::dropIfExists('user_stats');
        Schema::dropIfExists('user_score');
        Schema::dropIfExists('users');
    }
};
