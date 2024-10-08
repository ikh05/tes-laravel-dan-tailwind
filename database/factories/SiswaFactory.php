<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
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
            'username' =>$this->faker->userName(),
            'email' => $this->faker->freeEmail(),
            'noWa' => $this->faker->PhoneNumber(),
            'password' => bcrypt('123')

        ];
    }
}
