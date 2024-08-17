<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        return [
            'nama' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'banyakSiswa'=> mt_rand(23,38),
            'mapel_id' => mt_rand(1,2),
            'sekolah_id' => 1,
            'guru_id' => 1
        ];
    }
}
