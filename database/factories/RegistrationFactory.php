<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registration;
use App\Models\Lesson;
use App\Models\Student;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $factory->define(Registration::class, function (Faker $faker) {
            $lesson = Lesson::inRandomOrder()->first();
            $student = Student::inRandomOrder()->first();

            return [
                'lesson_id' => $lesson->id,
                'student_id' => $student->id,
                'price' => $faker->randomFloat(2, 50, 500),
            ];
        });

    }
}
