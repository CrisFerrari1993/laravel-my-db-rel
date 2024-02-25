<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'framework' => fake() -> randomElement(['Vue.JS', 'Angular', 'React', 'Pyton', 'Laravel', 'Java', 'Ruby', 'Simfony'])
        ];
    }
}
