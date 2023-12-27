<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;
use App\Models\Topic;
use App\Models\ReviewArticle;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;

    public function definition()
    {
        $status = $this->faker->randomElement(['pending', 'approved', 'rejected']);
        return [
            //
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'conference_id' => $this->faker->numberBetween(2, 10),
            'topic_id' => function () {
                return Topic::inRandomOrder()->first()->id;
            },
            'review_article_id' => ReviewArticle::all()->random()->id,
            'auth_conf_file' => null,
            'title' => $this->faker->sentence,
            'abstract' => $this->faker->paragraph,
            'status' => $status,
            'filepath' =>  $this->faker->sentence(1),
            'filepath_turnitin' =>  $this->faker->sentence(1),
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
