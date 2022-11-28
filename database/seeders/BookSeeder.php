<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i < 15; $i++) {
            Book::create([
                'publisher_id' => rand(1, 4),
                'title' => strtoupper($faker->words(rand(1, 3), true)),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'synopsis' => $faker->paragraph(10),
                'image' => 'image/book/novel.jpg'
            ]);
        }
    }
}
