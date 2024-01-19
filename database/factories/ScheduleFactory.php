<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Schedule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Schedule::class;
    public function definition(): array
    {
        return [
            //
            'master_activity_id' => $this->faker->numberBetween(2, 10),
            'start_date' => Carbon::now()->timezone($this->faker->timezone)->toDateTimeString(),
            'end_date' => Carbon::now()->timezone($this->faker->timezone)->toDateTimeString(),
            'created_by' => 1, // Sesuaikan dengan kebutuhan
            'updated_by' => null, // Sesuaikan dengan kebutuhan
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
