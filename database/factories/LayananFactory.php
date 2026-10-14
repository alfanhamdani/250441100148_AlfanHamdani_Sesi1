<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_layanan' => fake()->unique()->randomElement([
                'CK',
                'CS',
                'BC',
                'J',
            ]),
            'nama_layanan' => fake()->randomElement([
                'Cuci Kering',
                'Cuci Setrika',
                'Bet Cover',
                'Jas',
            ]),
        ];
    }
}
