<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(){
       return view('blog', ['posts'=>Post::all()]);
   }

public function show($slug) {
    $post = Post::where('slug', $slug)->first();
    if(!$post){
        abort(404);
    }
    return view('blog-post', compact("post"));
}
}
