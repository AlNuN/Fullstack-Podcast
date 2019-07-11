<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controls the actions on loading main navigation pages

    public function index () {
        $allPosts = Post::select('*')
            ->where('isPublished', true)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('contents/index', compact('allPosts'));
    }

    public function sobre (){
        return view('contents/sobre');
    }

    public function contato (){
        return view('contents/contato');
    }

    public function search () {

        $search = $_GET["searchTerms"];

        $allPosts = Post::search("$search")->where('isPublished', true)->paginate(3);

        if ($allPosts->isEmpty())  // this is a paginator method from laravel API
            return view('contents/searchFail');
        else 
            return view('contents/index', compact('allPosts'));

    }

}
