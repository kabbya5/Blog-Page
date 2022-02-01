<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => rtrim($this->faker->sentence(rand(6 ,10)),'.'),
            'excerpt' => $this->faker->paragraphs(rand(3,7),true),
            'body'  => $this->faker->paragraphs(rand(5, 8), true),
            'img'=>'https://source.unsplash.com/random',
        ];
    }
}
