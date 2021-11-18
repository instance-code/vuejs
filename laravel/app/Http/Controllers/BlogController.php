<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;

class BlogController extends Controller
{
    public function index(){
        return view('table');
    }
    public function getCreate($id){
        return view('create', compact('id'));
    }
    public function postCreate($id, CreateRequest $createRequest){
        return redirect()->route('blog.index')->with('msg', __('lang.msgCreate'));
    }
    public function delete($id){
        return redirect()->route('blog.index')->with('msg', __('lang.msgDelete'));
    }
    public function deleteAll(Request $request){
        $items = $request->item;
        foreach($items as $id){
            echo $id;
        }
        return redirect()->route('blog.index')->with('msg', __('lang.msgDelete'));
    }
}
