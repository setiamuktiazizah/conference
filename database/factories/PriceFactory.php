<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Price::class;

    public function definition(): array
    {
        return [
            //
            'conference_id' => $this->faker->numberBetween(2, 10),
            'name' => $this->faker->sentence,
            'price_idr' => $this->faker->randomFloat(2, 100, 1000),
            'price_usd' => $this->faker->randomFloat(2, 50, 500),
            'start_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'type_participant' => $this->faker->randomElement(['Student', 'Professional']),
            'created_by' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'updated_by' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
