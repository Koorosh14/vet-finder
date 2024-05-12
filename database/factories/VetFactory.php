<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends	\Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vet>
 */
class VetFactory extends Factory
{
	/**
	 * Defines the model's default state.
	 *
	 * @return	array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'user_id'     => User::all()->random()->id,
			'name'        => fake()->name(),
			'description' => fake()->realText(),
			'latitude'    => fake()->latitude(),
			'longitude'   => fake()->longitude(),
			'address'     => fake()->address(),
		];
	}
}
