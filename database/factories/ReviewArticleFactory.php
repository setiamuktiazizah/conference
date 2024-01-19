<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewArticle>
 */
class ReviewArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $decision = $this->faker->randomElement(['approved', 'rejected']);
        return [
            //
            'reviewer_id' => $this->faker->numberBetween(2, 10),
            'user_id' => $this->faker->numberBetween(2, 10),
            'comment' => $this->faker->sentence(4),
            'final_decision' => $decision,
            'created_by' => 1, // Sesuaikan dengan kebutuhan
            'updated_by' => null, // Sesuaikan dengan kebutuhan
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
