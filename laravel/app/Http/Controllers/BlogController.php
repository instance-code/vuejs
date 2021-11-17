<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::with('userCreated', 'userUpdated')->paginate(10);
        //dd($posts);
        return view('blog.index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        return view('blog.edit', ['post' => Blog::findOrFail($id), 'users' => User::all()]);
    }

    public function update(Request $request, $id)
    {
        $post = Blog::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        session()->flash('status', 'update_post');
        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        $post->delete();
        session()->flash('status', 'delete_post');

        return redirect()->route('blog.index');
    }

    public function deleteAll(Request $request)
    {
        $validate = $request->validate([
            'id' => 'required'
        ]);

        // dd($request->id);
        Blog::whereIn('id', $request->id)->delete();
        session()->flash('status', 'delete_select_post');
        return redirect()->route('blog.index');
    }
}
