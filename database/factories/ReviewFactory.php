<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'user_id' => User::all()->random()->id,
			'vet_id' => Vet::all()->random()->id,
			'rate' => fake()->numberBetween(1, 5),
			'comment' => fake()->realText(),
		];
	}
}
