<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = array('politics', 'tech', 'nature', 'travel', 'food');

        for ( $i = 0; $i < count($categories) ; $i++) { 
            $newPost = new Category();
            $newPost->name = $categories[$i];
            $newPost->color = $faker->hexColor();
            $newPost->save();
        }
    }
}
