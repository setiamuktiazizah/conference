<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MasterActivity;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterActivity>
 */
class MasterActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MasterActivity::class;

    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->sentence(2),
            'status' => $this->faker->sentence(1),
            'created_by' => 1, // Sesuaikan dengan kebutuhan
            'updated_by' => null, // Sesuaikan dengan kebutuhan
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
