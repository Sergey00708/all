<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1, 2000),
            'is_published' => '1',
            'category_id' => Category::get()->random()->id,
        ];
    }
}
