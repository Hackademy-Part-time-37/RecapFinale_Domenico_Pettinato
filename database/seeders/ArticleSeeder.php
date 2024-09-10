<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Creo 10 articoli falsi
        for ($i = 0; $i < 4; $i++) {
            Article::create([
                'title' => $faker->sentence,   // Titolo falso
                'description' => $faker->paragraph(40),  // Contenuto falso 
                'years' => $faker->year($max = 'now'),  //  anno casuale
                'image' => 'https://loremflickr.com/g/640/480/paris',  //immagine random
               // 'image' => 'https://loremflickr.com/g/640/480/rio',  //immagine random
               // 'image' => 'https://loremflickr.com/g/640/480/dog',  //immagine random
               // 'image' => 'https://loremflickr.com/g/640/480/cats',  //immagine random
            ]);
        }
    }
}