<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=fake()->sentence();
        return [
            'user_id'=>User::first()->id,
            'category_id'=>Category::inRandomOrder()->first()->id,
            'title' =>$title,
            'slug'=>str($title)->slug(),
            'body'=>fake()->realText(1000),
            'views'=>random_int(10,10000),
        ];
    }
}
