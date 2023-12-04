<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $randoms = ['active', 'inactive'];
        for ($i = 1; $i <= 16; $i++) {
            DB::table('quiz')->insert([
                'title' => Str::random(5),
                'description' => Str::random(20),
                'img' => Str::random(25),
                'status' => $randoms[array_rand($randoms)],
                'record_date' => Date::now()
            ]);
        }
    }
}
