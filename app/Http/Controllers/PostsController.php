<?php

namespace App\Http\Controllers;

use App\Post;  // Allow to make database operations in our posts table

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Controls posts pages

    public function genericPost($post){

        $postData = Post::where('name', "$post")->first();  // find the database by its name

        return view('posts/post', compact('postData'));  // insert it on the model

    }
}
