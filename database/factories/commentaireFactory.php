<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commentaire>
 */
class CommentaireFactory extends Factory
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
            "commentaire" => fake()->text(),
            "articles_id" => fake()->randomElement(article::all('id')->pluck('id')),
            "users_id" => fake()->randomElement(User::all('id')->pluck('id')),
        ];
    }
}
