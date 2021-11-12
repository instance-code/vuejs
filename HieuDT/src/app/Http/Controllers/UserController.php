<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Repositories\User\IUserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function App\Helpers\testHelper;


class UserController extends Controller
{

    protected $__userRepo;

    public function __construct(IUserRepository $usersRepository)
    {
        $this->__userRepo=$usersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
        return $this->__userRepo->all();
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
    public function store(RegisterUserRequest $request)
    {
        //
        $request->validated();
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $res=$this->__userRepo->create($data);
        if($res){
            return $res;
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
        return $this->__userRepo->find($id);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterUserRequest $request, $id)
    {
        //
        $request->validated();
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $res=$this->__userRepo->update($data,$id);
        if($res){
            return $res;
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
        //
        return $this->__userRepo->delete($id);
    }

    public function testHelper(){
        $res=testHelper();
        return $res;
    }

    public function getCookie(){
        
    }
}
