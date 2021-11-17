<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::with('user')->paginate(10);

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
        $id = $request->id;

        // dd($id);
        Blog::whereIn('id', $id)->delete();
        return redirect()->route('blog.index');
    }
}
