<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        $users = User::all();

        $categories = Category::factory(10)->create();

        $users->each(function ($user) use ($categories) {
            $user->posts()->saveMany(
                Post::factory(10)->make()->each(function ($post) use ($categories) {
                    $post->category_id = $categories->random()->id;
                })
            );
        });
    }
}
