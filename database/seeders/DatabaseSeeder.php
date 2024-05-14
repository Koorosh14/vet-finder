<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Review;
use App\Models\User;
use App\Models\Vet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
		// Run this command to refresh and seed the database:
		// php artisan migrate:refresh --seed

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
			'is_admin' => true,
        ]);

		Vet::factory(10)->create();

		Like::factory(50)->create();

		Review::factory(10)->create();
    }
}
