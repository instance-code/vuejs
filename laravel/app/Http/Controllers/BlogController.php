<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\BlogModel;

use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogModel::all();
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->route('blog.create')->withErrors($validator)->withInput();
        } 
        else 
        {
            $blog = new BlogModel;
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->created_by = $request->created_by;
            $blog->updated_by = $request->updated_by;
            $blog->updated_at = $request->updated_at;

            $blog->save();

            return redirect()->route('blog.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = BlogModel::find($id);

       return view('blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->route('blog.create')->withErrors($validator)->withInput();
        } 
        else 
        {
            $blog = BlogModel::find($id);
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->created_by = $request->created_by;
            $blog->updated_by = $request->updated_by;
            $blog->updated_at = $request->updated_at;

            $blog->save();

            return redirect()->route('blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = BlogModel::findOrFail($id);

        $blog->delete();

        return redirect()->route('blog.index');
    }

    //Delete all
    public function deleteCheckedBlogs(Request $request)
    {
        $ids = $request->ids;
        BlogModedl::whereIn('id', $ids)->delete();
        return response()->json(['success'=>"Blogs đã được xóa !"]);
    }
}
