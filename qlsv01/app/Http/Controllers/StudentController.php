<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Http\UploadedFile;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $classes=ClassModel::all();
        
        $students = StudentModel::orderBy('id','DESC')->paginate(10);
        return view('student.index',['students'=> $students,'classes'=>$classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.new');
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
            'fullname' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('student.create')->withErrors($validator)->withInput();
        }else{
            $student = new StudentModel();
            $student ->fullname = $request ->fullname;
            $student ->DOB = $request ->DOB;
            $student ->sex = $request ->sex;
            $student ->address = $request ->address;
            $student ->class_id = $request ->class_id;
            $student ->description = $request ->description;
            $student ->save();
            if($request->hasFile('avatar')){
                $file = $request->avatar;
                $file->move('../public/uploads',"{$student->id}. jpg");
            }
          
            return redirect()->route('student.index');
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
        $student = StudentModel::find($id);
        return view('student.edit',['student'=>$student]);
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
            'fullname' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('student.create')->withErrors($validator)->withInput();
        }else{
            //$student = new StudentModel();
            $student= StudentModel::find($id);
            $student ->fullname = $request ->fullname;
            $student ->DOB = $request ->DOB;
            $student ->sex = $request ->sex;
            $student ->address = $request ->address;
            $student ->class_id = $request ->class_id;
            $student ->description = $request ->description;
            $student ->save();
            return redirect()->route('student.index');
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
        $student = StudentModel::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
