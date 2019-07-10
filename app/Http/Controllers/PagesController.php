<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controls the actions on loading main navigation pages

    public function index () {
        $allPosts = \App\Post::select('*')->orderBy('id', 'desc')->get();
        return view('contents/index', compact('allPosts'));
    }

    public function sobre (){
        return view('contents/sobre');
    }

    public function contato (){
        return view('contents/contato');
    }

}
