<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Grade;
use App\Models\Student;
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
        Student::truncate();
        Exam::truncate();
        Grade::truncate();

        $this->call(StudentSeeder::class);
        $this->call(ExamSeeder::class);
        $this->call(GradeSeeder::class);
    }
}
