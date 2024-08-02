<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "welcome to the post";
    }
    public function show($show){
        return "welcome to the post {$show}";
    }
}
