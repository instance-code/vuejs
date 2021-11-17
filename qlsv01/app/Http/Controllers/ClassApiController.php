<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ClassModel;
use Illuminate\Support\Facades\Validator;

class ClassApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = ClassModel::all();
        //$classes = ClassModel::orderBy('id','DESC')->paginate(10);
        return response()->json($classes,201);
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
        $rules =[
            'name' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return  response()->json("",400);
        }else{
            $class = new ClassModel;
            $class ->name = $request ->name;
            $class ->description = $request ->description;
            $class ->save();

            return  response()->json("ok",201);
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
        $count = ClassModel::where('id',$id)->count();
        if($count=0){
            return response()->json("",204);
        }else{
            $class = ClassModel::findOrFail($id);
            return response()->json($class,201);
        }

    }

    /**
    
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
               $rules =[
            'name' =>'required|max:100'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json("",400);
        }else{
            //$class = new ClassModel;
            $class= ClassModel::find($id);
            $class ->name = $request ->name;
            $class ->description = $request ->description;
            $class ->save();
            return response()->json("OK",201);
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
        $class = ClassModel::findOrFail($id);
        $class->delete();
        return response()->json("OK",201);
    }
}
