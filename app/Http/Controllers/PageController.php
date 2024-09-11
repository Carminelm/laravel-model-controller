<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index (){


        $movies = Movie::all();

        return view('home');
    }


    public function contacts (){
        return view('contacts');
    }


    public function about (){
        return view('about');
    }


    public function movies (){
        return view('movies',compact('movies'));
    }
}
