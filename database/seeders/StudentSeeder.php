<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    

    public function run(): void
    {
        \App\Models\Student::factory()->count(10)->create();
    }
}
