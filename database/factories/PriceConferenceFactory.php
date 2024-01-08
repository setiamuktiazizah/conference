<?php

namespace Database\Factories;

use App\Models\PriceConference;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceConference>
 */
class PriceConferenceFactory extends Factory
{
    protected $model = PriceConference::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'conference_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word,
            'price_idr' => $this->faker->randomFloat(2, 100, 1000),
            'price_usd' => $this->faker->randomFloat(2, 10, 100),
            'min_participant' => $this->faker->numberBetween(1, 10),
            'max_participant' => $this->faker->numberBetween(1, 10),
            'created_by' => 1,
            'updated_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
