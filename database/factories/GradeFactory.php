<?php

namespace Database\Factories;

use App\Models\Exam;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 5),
            'exam_id' => $this->faker->numberBetween(1, 5),
            'mark' => $this->faker->numberBetween(6, 10)
        ];
    }
}
