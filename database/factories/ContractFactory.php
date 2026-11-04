<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // TODO: la data di inizio può risultare prima dei 16 anni del dipendente.
            // Calcolarla nel Seeder partendo da birth_date.
            'start_date' => fake()->dateTimeBetween('-15 years','-0 years'),
            'daily_rate' =>fake()->randomFloat(2,35,60),
        ];
    }
}
