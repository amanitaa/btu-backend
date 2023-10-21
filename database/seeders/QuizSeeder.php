<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $randoms = [1, 2, 3, 4, 5];
        for ($i = 1; $i <= 5; $i++) {
            DB::table('quiz')->insert([
                'title' => Str::random(5),
                'description' => Str::random(20),
                'users' => Arr::random($randoms),
            ]);
        }
    }
}
