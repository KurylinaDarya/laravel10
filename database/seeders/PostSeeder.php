<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       if (Post::count() == 0){
           for ($i=0; $i<2; $i++){
               Post::create([
                  'title' => 'Post '.$i,
                   'slug' => 'post-'.$i,
                   'content' => 'Post content '.$i,
               ]);
           }
       }
    }
}
