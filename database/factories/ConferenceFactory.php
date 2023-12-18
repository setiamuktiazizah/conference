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
            'id_reviewer' => null,
            'name' => $this->faker->sentence(4),
            'venue' => $this->faker->company,
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
    // public function definition(): array
    // {
    //     return [
    //         //

    //     ];
    // }
}
