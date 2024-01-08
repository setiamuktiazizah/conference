<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;


use App\Models\Article;
use App\Models\Reviewer;
use App\Models\User;
use App\Models\Conference;
use App\Models\MasterActivity;
use App\Models\Topic;
use App\Models\ReviewArticle;
use App\Models\Schedule;
use App\Models\Price;
use App\Models\Payment;
use App\Models\PriceConference;
use App\Models\Role;
use App\Models\RoleOwner;
use App\Models\Sponsor;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory()
        // ->count(10)
        // ->state(new Sequence(
        //     ['is_partner' => 1],
        //     ['is_partner' => 0],
        // ))
        // ->create();
        User::factory()->count(10)->create();
        Topic::factory()->count(10)->create();
        MasterActivity::factory()->count(10)->create();
        Schedule::factory()->count(10)->create();
        Conference::factory()->count(10)->create();
        Reviewer::factory()->count(10)->create();
        ReviewArticle::factory()->count(10)->create();
        Article::factory()->count(10)->create();
        Price::factory()->count(10)->create();
        PriceConference::factory()->count(10)->create();
        Payment::factory()->count(10)->create();
        RoleOwner::factory()->count(10)->create();
        Sponsor::factory()->count(10)->create();
    }
}
