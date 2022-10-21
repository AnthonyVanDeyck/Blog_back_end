<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'titre' => fake()->title(),
            'article' => fake()->text(),
            'media' => fake()->imageUrl(),
            // "users_id" => $this->faker->rendomElement(User::all('id')->pluck('id')),
            "users_id" => fake()->randomElement(User::all('id')->pluck('id')),
        ]; 
    }
}
