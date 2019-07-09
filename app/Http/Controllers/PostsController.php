<?php

namespace App\Http\Controllers;

use App\Post;  // Allow to make database operations in our posts table

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Controls posts pages

    public function genericPost($post){
        return view("posts/$post");
    }
}
