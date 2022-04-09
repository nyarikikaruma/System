<?php

namespace Database\Factories;

use App\Models\Bishop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'name' => $this->faker->name(),
                'bishop_id'=> Bishop::factory()
                
            ];
        }
        
}
