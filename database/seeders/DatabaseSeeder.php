<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(SectorSeeder::class);

        foreach (Sector::all() as $sector) {
            Employee::factory()->count(5)->create([
                'sector_id' => $sector->id,
            ]);
        }
        Employee::factory()->count(3)->create([
            'sector_id' => null,
        ]);
    }
}
