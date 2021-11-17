<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class BlogController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('blogs.index',compact('posts'));
    }

    public function edit($id){
        $posts = Posts::findOrFail($id);
        // dd($posts);
        return view('blogs.edit',compact('posts'));
    }

    public function update(Request $request, $id){
        $posts = Posts::findOrFail($id);
        $request->validate([
            'blog_title' => 'required|max:255|min:5',
            'blog_content' => 'required',
        ]);

        $posts::update($request->all());
        echo "update success";
    }
}
