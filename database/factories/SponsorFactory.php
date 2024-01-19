<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sponsor;
use App\Models\Conference;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sponsor::class;

    public function definition(): array
    {
        return [
            'conference_id' => Conference::all()->random()->id,
            'name' => $this->faker->sentence(2),
            'logo' =>  $this->faker->sentence(1),
            'created_by' => 1,
            'updated_by' => Null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
