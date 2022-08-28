<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
            "author_id" => User::all()->random()->id,
            'category_id'=> Category::all()->random()->id,
            'title' => rtrim($this->faker->sentence(rand(6 ,10)),'.'),
            'excerpt' => $this->faker->paragraphs(rand(3,7),true),
            'body'  => $this->faker->paragraphs(rand(5, 8), true),
            'img'=>'https://source.unsplash.com/random',


            'view_count' => $this->faker->randomNumber(5,false),
        ];
    }
}
