<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //

    public function index(){

        return view('pages.index' , compact('name'));
    }

    public function about(){

        return view('pages.about');
    }

    public function prolanguage(){

        return view('pages.prolanguage');
    }
}
