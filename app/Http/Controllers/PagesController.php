<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controls the actions on loading main navigation pages

    public function index () {
        return view('contents/index');
    }

    public function sobre (){
        return view('contents/sobre');
    }

    public function contato (){
        return view('contents/contato');
    }

}
