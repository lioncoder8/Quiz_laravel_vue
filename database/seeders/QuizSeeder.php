<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz')->insert(
            [
                'quiz_number'=>1,
                'title' => "1 + 2 = 3",
                'value' => "true"
            ]);
        DB::table('quiz')->insert(
            [
                'quiz_number'=>1,
                'title' => "1 + 2 = 3",
                'value' => "false"
        ]);
        DB::table('quiz')->insert(
            [
                'quiz_number'=>1,
                'title' => "1 + 2 = 3",
                'value' => "true"
        ]);
        DB::table('quiz')->insert(
            [
                'quiz_number'=>2,
                'title' => "1 + 2 = 3",
                'value' => "false"
        ]);
        DB::table('quiz')->insert(
            [
                'quiz_number'=>2,
                'title' => "1 + 2 = 3",
                'value' => "true"
        ]);
        DB::table('quiz')->insert(
            [
                'quiz_number'=>2,
                'title' => "1 + 2 = 3",
                'value' => "true"
        ]);
    }
}
