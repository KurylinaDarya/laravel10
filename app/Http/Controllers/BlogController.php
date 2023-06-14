<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(){
       $count = Post::count();
       $posts = Post::all();
       return view('blog', ['posts'=>$posts]);
   }

public function show($slug) {
    $post = Post::where('slug', $slug)->first();
    if(!$post){
        abort(404);
    }
    return view('blog-post', compact("post"));
}
}
