<?php

namespace Database\Seeders;

use Faker;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class Blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Blog::create([
                "blog_title" => "Mark",
                "blog_content" => $faker->text,
                "created_by" => "@Mark",
                "updated_by" => "@Jacob",
            ]);
        }
    }
}
