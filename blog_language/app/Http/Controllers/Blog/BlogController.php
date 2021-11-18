<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;

class BlogController extends Controller
{
    public function index($locale)
    {
        session(['APP_LOCALE'=>$locale]);

        $bgs=Blog::orderBy('id','desc')->paginate(5);
        return view('blogs.index',['bgs'=>$bgs]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(Blog $blog)
    {
        
    }

    public function edit($id)
    {   
        $bgs=Blog::find($id);
        return view('blogs.edit',['bgs'=>$bgs]);
    }
    public function update(UpdateRequest $request, $id)
    {

        $bgs=Blog::find($id);
        $bgs->blog_title=$request->blog_title;
        $bgs->blog_content=$request->blog_content;
        $bgs->updated_by=$request->updated_by;
        $bgs->updated_at=$request->updated_at;
        $bgs->save();
        return redirect()->route('blog.index');
    }
    public function destroy($id)
    {
        $bgs=Blog::find($id);
        $bgs->delete();
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids=$request->ids;
        Blog::whereIn('id',$ids)->delete();
        return response()->json(["Greated!"]);
    }
}
