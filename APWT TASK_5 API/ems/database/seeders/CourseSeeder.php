<?php

namespace Database\Seeders;
use App\Models\Course;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Course::factory()->create([
            'c_name' => 'IPL',
            'code' => '1131',
            'studentid' => '1',
        ]);
    }
}
