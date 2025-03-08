<?php

namespace Database\Seeders;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Rojiura De Hirotta V1',
            'slug' => 'Rojiura-De-Hirotta-V1',
            'author_id' => 1,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Majo No Tabi Tabi V3',
            'slug' => 'Majo-No-Tabi-Tabi-V3',
            'author_id' => 2,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Kage No Jitsuryokusha V4',
            'slug' => 'Kage-No-Jitsuryokusha-V4',
            'author_id' => 7,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Heroine Survival V2',
            'slug' => 'Heroine-Survival-V2',
            'author_id' => 3,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Naze Ka S Kyuu V4',
            'slug' => 'Naze-Ka-S-Kyuu-V4',
            'author_id' => 4,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Hangyakusha Toshite V1',
            'slug' => 'Hangyakusha-Toshite-V1',
            'author_id' => 9,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Silent Witch V1',
            'slug' => 'Silent-Witch-V1',
            'author_id' => 6,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Classroom Elite Year 2 V11',
            'slug' => 'Classroom-Elite-Year-2-V11',
            'author_id' => 8,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Silent Witch V4 After',
            'slug' => 'Silent-Witch-V4-After',
            'author_id' => 6,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);

        Post::create([
            'title' => 'Danjou Yuujou V4',
            'slug' => 'Danjou Yuujou V4',
            'author_id' => 5,
            'category_id' => 5,
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?'
        ]);
    }
}
