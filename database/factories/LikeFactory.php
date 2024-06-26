<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
	/**
	 * Defines the model's default state.
	 *
	 * @return	array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'user_id' => User::all()->random()->id,
			'vet_id'  => Vet::all()->random()->id,
			'is_like' => fake()->boolean(),
		];
	}
}
