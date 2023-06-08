<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        dd(Post::all());
//        return 'В блоге ' .Articles::count(). ' статей, ' .Articles::where('image', null)->count(). ' из них без обложек';
    }
}
