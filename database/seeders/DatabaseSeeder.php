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


        Category::factory()
        ->sequence(
            ["name" => "Web Design"],
            ["name" => "HTML"],
            ["name" => "Freebies"],
            ["name" => "JavaScript"],
            ["name" => "CSS"],
            ["name" => "Tutorials"]
        )
        ->count(6)
        ->create();

        // Create users with posts and comments
        User::factory(10)
            ->has(Post::factory(15)
                ->sequence(
                    ["status" => "published"],
                    ["status" => "draft"]
                )
                ->has(Comment::factory()->count(2))
            )
            ->create();
    }
}
