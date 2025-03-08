<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Manhwa',
            'slug' => 'Manhwa',
            'color' => 'fuchsia'
        ]);

        Category::create([
            'name' => 'Manga',
            'slug' => 'Manga',
            'color' => 'lime'
        ]);

        Category::create([
            'name' => 'Manhua',
            'slug' => 'Manhua',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Novel',
            'slug' => 'Novel',
            'color' => 'violet'
        ]);

        Category::create([
            'name' => 'Light Novel',
            'slug' => 'LN',
            'color' => 'sky'
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'Anime',
            'color' => 'teal'
        ]);

        Category::create([
            'name' => 'Games',
            'slug' => 'Games',
            'color' => 'orange'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'Programming',
            'color' => 'emerald'
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'Food',
            'color' => 'pink'
        ]);

        Category::create([
            'name' => 'Politics',
            'slug' => 'Politics',
            'color' => 'slate'
        ]);
    }
}
