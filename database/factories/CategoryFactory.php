<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$categories = array(
        "Tech",
        "Food",
        "Travel",
        "DIY",
        "Fashion",
        "Business",
        "Health",
        "Fitness",
        "Art",
        "Music",
      );

        $category=fake()->unique()->randomElement($categories);
        return [
            'name' =>$category,
            'slug'=>str($category)->slug(),
        ];
    }
}
