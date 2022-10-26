<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class PostController extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('index', ['todo' => $todos]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $Todo = todo::find($request->input);
        $param = [
            'todos' => $todos,
            'input' => $request->input
        ];
        return view('find', $param);
    }
}