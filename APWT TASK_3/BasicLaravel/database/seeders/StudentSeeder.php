<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

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
            'student_id' => '3333',
            'email'=> 'ritubsk@gmail.com',
            'password' => '1234',
        ]);
    }
}
