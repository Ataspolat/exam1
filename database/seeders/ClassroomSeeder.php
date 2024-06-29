<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'A1',
            'A2',
            'A3',
            'A4',
            'A5',
            'B1',
            'B2',
            'B3',
            'B4',
            'B5',
        ];

        foreach ($objs as $obj) {
            Classroom::create(['name' => $obj]);
        }
    }
}
