<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->unique()->email(),
            'sex'=> fake()->randomElement(['M','F']),
            'phone' => fake()->phoneNumber() ,
            'age'=>fake()->numberBetween($min = 18, $max = 80),
            'section'=>fake()->name(),
            'content'=>fake()->text(),
            'status'=>rand(0,1)
        ];
    }
}
