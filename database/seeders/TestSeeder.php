<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Seed the application's database with basic test data
     */
    public function run(): void
    {
        $i = 10;

        for ($i = 0; $i < 10; $i++) 
        {
            $user_id = Str::random(10);
            $score = rand(-15, 15);
            $balance = rand(0, 5);
            $number_of_wins = rand(0, 5);
            $number_of_runner_ups = rand(0, 5);

            DB::table('users')->insert([
                'user_id' => $user_id,
            ]);

            DB::table('user_score')->insert([
                'user_id' => $user_id,
                'score' => $score,
                'balance' => $balance,
            ]);

            DB::table('user_stats')->insert([
                'user_id' => $user_id,
                'number_of_wins' => $number_of_wins,
                'number_of_runner_ups' => $number_of_runner_ups,
            ]);
        }
    }
}
