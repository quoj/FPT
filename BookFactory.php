<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->domainName;
        return [
            "authorid" => $this->faker->numberBetween(1, 1000), 
            "title" => $name,
            "ISBN" => $name,
            "pub_year" => $this->faker->year('now'), 
            "available" => $this->faker->randomDigitNotNull,

        ];
    }
}
