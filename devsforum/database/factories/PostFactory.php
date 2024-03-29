<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'community_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'title' => $this->faker->text(50),
            'post_text' => $this->faker->text(500),
        ];
    }
}
