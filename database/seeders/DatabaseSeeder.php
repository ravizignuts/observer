<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->has(
        //     Post::factory()->has(
        //         Comment::factory()->count(2)
        //         ,'comment')->count(2)
        //     ,'post')->create();
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Comment::factory(10)->create();
        User::factory(10)->create();
        Post::factory(10)->create();
        Comment::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
