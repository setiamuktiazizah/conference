<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conference;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Conference::class;

    public function definition()
    {
        return [
            'reviewer_id' => null,
            'name' => $this->faker->sentence(4),
            'topic_id' => $this->faker->numberBetween(2, 10),
            'schedule_id' => $this->faker->numberBetween(2, 10),
            'venue' => $this->faker->company,
            'url_venue' => $this->faker->url,
            'type' => $this->faker->randomElement(['Tech', 'Science', 'Business']),
            'total_reviewer' => $this->faker->numberBetween(50, 200),
            'logo' => $this->faker->imageUrl(), // Contoh penggunaan URL gambar (bisa disesuaikan)
            'timezone' => Carbon::now()->timezone($this->faker->timezone)->toDateTimeString(),
            'url' => $this->faker->url,
            'created_by' => 1, // Sesuaikan dengan kebutuhan
            'updated_by' => null, // Sesuaikan dengan kebutuhan
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
