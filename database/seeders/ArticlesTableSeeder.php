<?php

namespace Database\Seeders;

use App\Models\Article;
use App\User;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla articles.
        Article::truncate();
        $faker = \Faker\Factory::create();
        // Y ahora con este usuario creamos algunos articulos
        $num_articles = 5;
        for ($j = 0; $j < $num_articles; $j++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                //'category_id' => $faker->numberBetween(1, 3),
                //'image' => 'articles/' . $image_name
            ]);
        }
    }
}
