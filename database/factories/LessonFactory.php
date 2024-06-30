<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Classroom;
use App\Models\Branch;
use App\Models\Teacher;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $factory->define(Lesson::class, function (Faker $faker) {
            $classroom = Classroom::inRandomOrder()->first();
            $branch = Branch::inRandomOrder()->first();
            $teacher = Teacher::inRandomOrder()->first();

            return [
                'classroom_id' => $classroom->id,
                'branch_id' => $branch->id,
                'teacher_id' => $teacher ? $teacher->id : null,
            ];
        });

    }
}
