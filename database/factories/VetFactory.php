<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vet>
 */
class VetFactory extends Factory
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
			'name' => fake()->name(),
			'description' => fake()->realText(),
			'photo' => fake()->filePath(),
			'latitude' => fake()->latitude(),
			'longitude' => fake()->longitude(),
			'address' => fake()->address(),
			'work_hours' => fake()->time('H') . ' to ' . fake()->time('H'),
		];
	}
}
