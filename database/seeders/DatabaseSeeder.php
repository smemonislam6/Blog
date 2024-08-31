<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users with posts and comments
        // User::factory(10)->create();

        // Category::factory(6)->sequence(
        //     ["name" => "Web Design"],
        //     ["name" => "HTML"],
        //     ["name" => "Freebies"],
        //     ["name" => "JavaScript"],
        //     ["name" => "CSS"],
        //     ["name" => "Tutorials"]
        // )->create();

        // Post::factory(10)->create();

        // Comment::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class
        ]);
            
    }
}
