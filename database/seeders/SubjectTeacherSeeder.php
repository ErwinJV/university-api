<?php

namespace Database\Seeders;

use App\Models\SubjectTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectTeacher::factory(60)->create();
    }
}
