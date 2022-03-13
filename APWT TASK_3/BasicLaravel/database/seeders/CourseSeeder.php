<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\course::factory()->create([
            'c_name' => 'IPL',
            'code' => '1131',
            'teacherid' => '1',
        ]);
    }
}
