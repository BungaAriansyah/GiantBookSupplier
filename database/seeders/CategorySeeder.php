<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Romance',
            'Horror',
            'Comedy',
            'Thriller',            
            'Slice of Life',            
        ];
        foreach ($categories as $c) {
            Category::create(['name' => $c]);
        }
    }
}
