<?php

namespace Database\Seeders;

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
        User::factory(10)->unverified()
            ->has(
                Post::factory()
                ->sequence(
                    ['status' => 'published'],
                    ['status' => 'draft'],
                )->count(3)
                ->has(Comment::factory()->count(2)))
            ->create();


        // User::factory(10)
        //     ->hasPosts(3, new Sequence(
        //         ['status' => 'published'],
        //         ['status' => 'draft'],
        //     ))
        //     ->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        // ]);
    }
}
