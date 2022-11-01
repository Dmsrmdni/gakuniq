<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_depan' => fake()->name(),
            'nama_belakang' => fake()->name(),
            'no_telepon' => fake()->randomNumber(5, false),
            'username' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password

            'tanggal_lahir' => fake()->date(),
            // 'jenis_kelamin' => fake()->name(),
            'referensi' => fake()->word(),

            'kota_kecamatan' => fake()->word(),
            'alamat_lengkap' => fake()->paragraph(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
