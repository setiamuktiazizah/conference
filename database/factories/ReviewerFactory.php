<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
            'id_conference' => $this->faker->numberBetween(2, 10),
            'id_user' => $this->faker->numberBetween(1, 10),
            'created_by' => 1,
            'updated_by' => 1,
            // 'created_by' => $this->faker->numberBetween(1, 100),
            // 'updated_by' => $this->faker->numberBetween(1, 100),
            // tambahkan definisi lainnya sesuai kebutuhan
        ];
    }
}
