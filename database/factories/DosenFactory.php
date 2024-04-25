<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nidn' => $this->faker->numerify('###########'),
            'nama' => $this->faker->name(),
            'fakultas' => $this->faker->sentence(),
            'matkul' => $this->faker->sentence()
        ];
    }
}
