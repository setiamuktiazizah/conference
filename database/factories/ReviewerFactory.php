<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Reviewer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Reviewer::class;

    public function definition()
    {
        return [
            'conference_id' => $this->faker->numberBetween(2, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            // 'created_by' => $this->faker->numberBetween(1, 100),
            // 'updated_by' => $this->faker->numberBetween(1, 100),
            // tambahkan definisi lainnya sesuai kebutuhan
        ];
    }
}
