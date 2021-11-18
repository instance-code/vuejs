<?php

namespace App\Http\Controllers;

use App\Models\Blogtitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $blogs=Blogtitle::orderBy('id','DESC')->get();
        $lang=$_GET['lang'];
        session([
            'APP_LOCALE'=>$lang
        ]);
        return view('blog.index')->with(compact('blogs'));
      
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang)
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
        //
        $blog=Blogtitle::find($id);
        return view('blog.edit')->with(compact('blog'));
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
        //

        $data=$request->validate([
            'blog_title'=>'required|max:255|min:5',
            'blog_content'=>'required',
            'created_by'=>'required',
            'created_date'=>'date',
        ],);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Blogtitle::find($id)->delete();
        return redirect()->back()->with('status','Xoá thành công');
    }
}
