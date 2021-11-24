<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BlogRequest;

use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    public function __construct(
        protected $blogs = []
    ) {


    }

    public function index(Request $request)
    {
        $blogs = Blog::all();

        return view('blogs.index', [
            'title' => 'blog page list',
            'blogs' => $blogs
        ]);
    }

    public function create(Request $request)
    {
        return view('blogs.create', [
            'title' => 'blog page',
            'blog' => new Blog,
            'users' => User::all()
        ]);
    }

    public function store(BlogRequest $request)
    {
        \DB::beginTransaction();
        try {
            $blog = new Blog;
            $blog->fill($request->all())->save();
            \DB::commit();
            return redirect()->route('blogs.index')->withMessages("OK");
        } catch(\Exception $e) {
            \DB::rollback();
            return back()->withErrors($e->getMessage());
        }

    }

    public function edit(Request $request)
    {
        $blog = Blog::find($request->id);
        if(empty($blog)) {
           return redirect()->route('blogs.index')->withMessages("Khong ton tai {$request->id}");
        }
        return view('blogs.edit', [
            'title' => 'blog page',
            'blog' => $blog,
            'users' => User::all()
        ]);
    }

    public function update(BlogRequest $request)
    {
        \DB::beginTransaction();
        try {
            // Blog::where('id', $request->id)->update($request->all());
            $blog = Blog::find($request->id);
            $blog->fill($request->all())->save();
            \DB::commit();
            return redirect()->route('blogs.index')->withMessages("OK");
        } catch(\Exception $e) {
            \DB::rollback();
            return back()->withErrors($e->getMessage());
        }
    }

    public function delete(Request $request)
    {

    }
}
