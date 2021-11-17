<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{

    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $created_by = rand(1, 10);
        $updated_by  = rand(1, 10);

        return [
            'title' => $this->faker->realText(30),
            'content' => $this->faker->paragraph(),
            'created_by' => $created_by,
            'updated_by' => $updated_by,
        ];
    }
}
