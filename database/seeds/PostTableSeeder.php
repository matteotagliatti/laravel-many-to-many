<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(5);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->author = $faker->name();
            $newPost->text = $faker->paragraphs(5, true);
            $newPost->img = $faker->imageUrl(640, 480, 'post', true);
            $newPost->save();
        }
    }
}
