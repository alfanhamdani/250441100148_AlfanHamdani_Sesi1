<?php

namespace Database\Factories;

use App\Models\pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'layanan_id' => Pesanan::factory(),
            'nama_pelanggan' => fake()->name(),
            'tanggal_masuk' => fake()->name(),
            'jumlah' => fake()->name(),
            'total_biaya' => fake()->name(),
            'status' => fake()->name(),
        ];
    }
}
