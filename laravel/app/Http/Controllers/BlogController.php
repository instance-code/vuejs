<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs;
    public function __construct(Blog $blogs)
    {
        $this->blogs = $blogs;
    }
    public function index()
    {
        $blogs = $this->blogs->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.blog_change');
    }

    public function store(BlogRequest $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->update_date = date('Y-m-d H:i:s', strtotime($request->update_date));
        $blog->save();
        return redirect()->route('blogs.index');
    }


    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.blog_change', compact('blog'));
    }

    public function update($id, BlogRequest $request)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->update_date = date('Y-m-d H:i:s', strtotime($request->update_date));
        $blog->update();
        return redirect()->route('blogs.index');
    }

    public function delete($id) {
        Blog::find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
