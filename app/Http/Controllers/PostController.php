<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show($show){
        //manera tradicional
        /*
        return view('posts.show',[
            'show' => $show
        ]);
        */

        //manera simplificada
        return view('posts.show', compact('show'));//el compact lo simplifica
    }
}
