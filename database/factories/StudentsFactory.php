<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name" => $this->faker->name(),
            "lastName" =>$this->faker->lastName(),
            "grade" => $this->faker->numberBetween(7,12),
            "score" =>$this->faker->numberBetween(4,100),
            "age" => $this->faker->numberBetween(10,40),
        ];
    }
}
