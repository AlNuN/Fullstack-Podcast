<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Controls posts pages

    public function Bandersnatch_001(){
        return view('posts/bandersnatch_001');
    }
}
