<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake() -> unique() -> words(3, true),
            'description'=> fake() -> paragraph(),
            'img_url'=> fake() -> imageUrl(640, 480, 'project', true),
            'creation_date'=> fake() -> date('Y_m_d'),
            'status'=> fake() -> randomElement(['Beta', 'Alpha', 'Stable', 'Debugging', 'Completed', 'Work in progress']) 
        ];
    }
}
