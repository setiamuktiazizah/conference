<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Menggunakan password default 'password'
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'institution' => $this->faker->company,
            'created_by' => null, // Atur sesuai kebutuhan
            'updated_by' => null, // Atur sesuai kebutuhan
            'remember_token' => $this->faker->randomAscii,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
    // public function definition(): array
    // {
    //     return [
    //         'name' => fake()->name(),
    //         'email' => fake()->unique()->safeEmail(),
    //         'email_verified_at' => now(),
    //         'password' => static::$password ??= Hash::make('password'),
    //         'remember_token' => Str::random(10),
    //     ];
    // }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
