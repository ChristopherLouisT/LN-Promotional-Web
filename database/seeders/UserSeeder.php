<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Kabochamasuku',
            'username' => 'Kabochamasuku',
            'email' => 'KMasuku@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Jogi Shiraishi',
            'username' => 'Jogi Shiraishi',
            'email' => 'JShira@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Harunohi Biyori',
            'username' => 'Harunohi Biyori',
            'email' => 'HBiyori@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Konatsu Wakioka',
            'username' => 'Konatsu Wakioka',
            'email' => 'KWaki@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Nana Nanana',
            'username' => 'Nana Nanana',
            'email' => 'Nanana@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Matsuri Isora',
            'username' => 'Matsuri Isora',
            'email' => 'Matsora@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Daisuke Aizawa',
            'username' => 'Daisuke Aizawa',
            'email' => 'Daizawa@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Kinugasa Shougo',
            'username' => 'Kinugasa Shougo',
            'email' => 'Kinugasa@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Yuto Sagami',
            'username' => 'Yuto Sagami',
            'email' => 'YSagami@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10)
        ]);
    }
}
