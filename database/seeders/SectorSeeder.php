<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sector::create([
            'name' => 'bar',
            'description' => 'prova',
        ]);
        Sector::create([
            'name' => 'cucina',
            'description' => 'prova',
        ]);
        Sector::create([
            'name' => 'spiaggia',
            'description' => 'prova',
        ]);
        Sector::create([
            'name' => 'sala',
            'description' => 'prova',
        ]);
    }
}
