<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reviewer;
use App\Models\User;
use App\Models\Conference;
use App\Models\MasterActivity;
use App\Models\Topic;
use App\Models\Schedule;

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
        User::factory()->count(10)->create();
        Topic::factory()->count(10)->create();
        MasterActivity::factory()->count(10)->create();
        Schedule::factory()->count(10)->create();
        Conference::factory()->count(10)->create();
        Reviewer::factory()->count(10)->create();
    }
}
