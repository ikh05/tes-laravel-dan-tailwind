<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        return [
            'nama' => $this->faker->name(),
            'username' =>$this->faker->userName(),
            'email' => $this->faker->freeEmail(),
            'noWa' => $this->faker->PhoneNumber(),
            'img' => mt_rand(1,10).'.png',
            'jk' => mt_rand(1,2) === 1  ? 'l' : 'p',
            'password' => bcrypt('123')
        ];
    }
}
