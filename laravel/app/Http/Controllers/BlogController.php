<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class BlogController extends Controller
{
    public function setLocale($lang) {
        session(['APP_LOCALE'=>$lang]);
        return back();
    }

    public function list() {

        $blogs = Blog::all();
        return view('blog.BlogList',[
            'title' => 'Blog'
        ], compact('blogs'));
    }

    public function GetCreate() {
        return view('blog.CreateBlog',[
            'title' => 'Create blog'
        ]);
    }

    public function PostCreate(BlogRequest $request) {
        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->blog_content = $request->blog_content;
        $blog->created_by = $request->created_by;
        $blog->updated_by = $request->updated_by;
        $blog->created_at = $request->created_at;
        $blog->save();

        return redirect()->route('blog.list')->with('messege' ,'Thêm blog thành công!');
    }

    public function edit($id) {
        $blog = Blog::find($id);
        return view('blog.EditBlog',[
            'title' => 'Edit blog'
        ], compact('blog'));
        dd($blog);
    }

    public function update(BlogRequest $request, $id) {
        $blog = BLog::find($id);
        $blog->blog_title = $request->blog_title;
        $blog->blog_content = $request->blog_content;
        $blog->created_by = $request->created_by;
        $blog->updated_by = $request->updated_by;
        $blog->created_at = $request->created_at;
        $blog->save();

        return redirect()->route('blog.list')->with('messege' ,'Sửa blog thành công!');
    }

    public function delete($id) {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blog.list')->with('messege' ,'Xóa blog thành công!');
    }
}
