<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];

        foreach ($objs as $obj) {
            Branches::create(['name' => $obj]);
        }
    }
}
