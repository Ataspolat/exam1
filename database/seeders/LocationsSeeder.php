<?php

namespace Database\Seeders;

use App\Models\Locations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Univermag',
            'Parahat1',
            'Anew',
        ];

        foreach ($objs as $obj) {
            Locations::create(['name' => $obj]);
        }
    }
}
