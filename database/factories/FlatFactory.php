<?php

namespace Database\Factories;

use App\Models\Flat;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flat>
 */
class FlatFactory extends Factory
{
    
    protected $model = Flat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
            'area' => rand(40,70),
            'rooms' => rand(1,4),
            'layout' => $this->faker->imageUrl(),
            'cost' => rand(1000, 9999),
            'house_id' => House::get()->random()->id
        ];
    }
}
