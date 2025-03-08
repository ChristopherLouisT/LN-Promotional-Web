<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this -> call([CategorySeeder::class, UserSeeder::class, postSeeder::class]);
    }
}
