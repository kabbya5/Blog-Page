<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Category::class;

    public function definition()
    {

      $title = $this->faker->text(rand(15,20));

        return [
            'title' => $title,
            'slug' => str_slug($title),
            'img'=>'https://source.unsplash.com/random',
        ];
    }
}
