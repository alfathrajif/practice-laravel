<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'gender' => Arr::random(['L', 'P']),
            'nis' => fake()->unique()->randomNumber(6, true),
            'class_id' => Arr::random([1, 2, 3, 4]),
        ];
    }
}
