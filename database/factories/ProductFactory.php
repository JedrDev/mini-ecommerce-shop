<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'description' => $this->faker->text(),
            'slug' => Str::slug($name),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'status' => $this->faker->boolean,
        ];
    }
}
