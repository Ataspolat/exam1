<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Registration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Database\Factories\TeacherFactory::new()->count(10)->create();
        Database\Factories\StudentFactory::new()->count(50)->create();
        Database\Factories\LessonFactory::new()->count(50)->create();
        Database\Factories\RegistrationFactory::new()->count(100)->create();

        $this->call(LocationSeeder::class);
        $this->call(BranchSeeder::class);

    }
}
