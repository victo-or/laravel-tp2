<?php

namespace Database\Factories;

use App\Models\ForumPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ForumPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'title_fr' => $this->faker->sentence,
            'body' => $this->faker->paragraph(30),
            'body_fr' => $this->faker->paragraph(30),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
