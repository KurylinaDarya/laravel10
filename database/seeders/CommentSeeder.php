<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Comment::count() == 0) {
            $posts = Post::all();
            foreach ($posts as $post) {
                $rand = rand(0, 8);
                Comment::factory()->count($rand)->state(['post_id' => $post->id])->create();
            }
        }

    }
}
