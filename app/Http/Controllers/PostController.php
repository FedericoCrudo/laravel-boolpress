<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){

        $post=Post::all();
        $data=[
            'post'=>$post
        ];


        return view('guest.post.index',$data);
    }
}
