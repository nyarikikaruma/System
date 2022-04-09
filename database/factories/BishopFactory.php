<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bishop>
 */
class BishopFactory extends Factory
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
                'contact' => $this->faker->numerify('##########'),
                
            ];
    }
}
