<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

    $posts = Post::all();
    //$posts_filtered = Post::where("category_id",1)->get();
    return response()->json($posts);

    }

    
}
