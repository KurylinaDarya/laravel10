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
//    public function run(): void
//    {
//        Post::factory()->count(3)->create();
//    }
    public function run(): void
    {
       if (Post::count() == 0){
           for ($i=1; $i<5; $i++){
               $rand = rand(0, 1);
               $randImage = $rand ? fake()->imageUrl : null;
               Post::create([
                  'title' => 'Запись в блоге '.$i,
                   'annotation' => 'Post annotation '.$i,
                   'content' => fake() -> paragraph(3),
                   'image' => $randImage
               ]);
           }
           \App\Models\Post::factory(10)->create()->make();
       }
    }
}
