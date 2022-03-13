<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TeacherSeeder::class
        ]);
        $this->call([
            StudentSeeder::class
        ]);
        $this->call([
            CourseSeeder::class
        ]);
    }
}
