<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
            Blog::create([
                'blog_title'=>'Mark',
                'blog_content'=>$faker->text,
                'created_by'=>'@Mark',
                'updated_by'=>'@Jacob',
            ]);
        }
    }
}
