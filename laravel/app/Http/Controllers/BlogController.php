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
        return view('blogs.edit',compact('posts'));
    }

    public function update(Request $request, $id){
        $posts = Posts::findOrFail($id);
    
        $validated = $request->validate([
            'blog_title' => 'required|max:255|min:5',
            'blog_content' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
            'updated_date' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $posts->update($validated);
        return redirect('bloglist');
    }

    public function delete(Request $request, $id){
        $posts = Posts::findOrFail($id);
        $posts->delete();

        return redirect('bloglist');
    }

    // public function deleteCheckbox(Request $request){
    //     $checking = $request->input('checkall');
    //     dd($checking);

    //     // foreach($checking as $id){
    //     //     Posts::where("id",$id)->delete();
    //     // }
    // }
}
