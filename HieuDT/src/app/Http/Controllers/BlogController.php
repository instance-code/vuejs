<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Repositories\Blog\BlogInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{

    public function __construct(
        protected BlogInterface $blog
    )
    {
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //App::setLocale(session('lang'));
        //blade
        // $data = Blog::all();
        // return view('blogs.index')->with(['blogs' => $data]);

        return Blog::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $request->validated();
        // $res = Blog::create($request->except('_token'));
        // if ($res) {
        //     return $this->index();
        // }
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        // return view('blogs.edit')->with(['blog' => $blog]);

        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        //
        $request->validated();
        $res = Blog::where('id', $id)->update($request->except('_method', '_token'));
        if ($res) {
            return  $this->index();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   //
        // $res =  Blog::destroy($id);
        // if ($res) {
        //     return $this->index();
        // }
        $res=Blog::destroy($request->id);
        return $res;
    }
    public function deleteByChecked(Request $request)
    {
        $res=true;
        $arr = $request->all();

        for ($i = 0; $i < count($arr); $i++) {
           $r= Blog::destroy($arr[$i]);
           if(!$r) $res=false;
        }
        // return  $this->index();
        return $res;

    }
}
