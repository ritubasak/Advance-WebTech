<?php

namespace Database\Seeders;
use App\Models\student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Student::factory()->create([
            'name' => 'Ritu Basak',
            'phone' => '3333',
            'password' => '1234',
        ]);
    }
}
