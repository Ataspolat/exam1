<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        factory(Teacher::class, 10)->create();
        factory(Student::class, 50)->create();
        factory(Lesson::class, 50)->create();
        factory(Registration::class, 100)->create();

        $this->call(LocationSeeder::class);
        $this->call(BranchSeeder::class);

    }
}
