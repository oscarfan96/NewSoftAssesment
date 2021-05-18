<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $commentable = [
            Post::class,
        ];

        $fakerRandomElement = $this->faker->randomElement($commentable);

        return [
            'user_id'=> User::factory(),
            'body' => $this->faker->paragraph,
            'commentable_type' => $fakerRandomElement,
            'commentable_id' => $fakerRandomElement::all()->random()->id,
        ];
    }
}
