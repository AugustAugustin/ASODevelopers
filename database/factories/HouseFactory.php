<?php

namespace Database\Factories;

use App\Models\House;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->title(30),
            'date_of_delivery' => $this->faker->date(),
            'project_id' => Project::get()->random()->id,
        ];
    }
}
