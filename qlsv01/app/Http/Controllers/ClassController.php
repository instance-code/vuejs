<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ClassModel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->session()->has('last_class_name')) {

            App::setLocale(session('lang'));
            echo "<br>Ngôn Ngữ Được Dùng Là: " . App::currentLocale();
        }
        //$classes = ClassModel::all();
        $classes = ClassModel::orderBy('id', 'DESC')->paginate(10);

        return view('class.index', ['classes' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        App::setLocale(session('lang'));
        return view('class.new');
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
            'name' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('class.create')->withErrors($validator)->withInput();
        } else {
            $class = new ClassModel;
            $class->name = $request->name;
            $class->description = $request->description;
            $class->save();
            $request->session()->put('last_class_name', $class->name);
            return redirect()->route('class.index');
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
        $class = ClassModel::find($id);
        App::setLocale(session('lang'));
        return view('class.edit', ['class' => $class]);
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
            'name' => 'required|max:100'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return  redirect()->back()->withErrors($validator)->withInput();
        } else {
            //$class = new ClassModel;
            $class = ClassModel::find($id);
            $class->name = $request->name;
            $class->description = $request->description;
            $class->save();
            return redirect()->route('class.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $class = ClassModel::findOrFail($id);
        $class->delete();
        return redirect()->route('class.index');
    }
    public function Detele_all(Request $request)
    {
        $id = $request->exercise;
        foreach ($id as $user) {
            ClassModel::where('id', $user)->delete();
        }
        return redirect()->route('class.index');
    }
}
