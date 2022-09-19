<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $Posts = Post::all();
        return view('index', ['Post' => $Post]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $Posts = Post::find($request->input);
        $param = [
            'Post' => $Posts,
            'input' => $request->input
        ];
        return view('find', $param);
    }
}