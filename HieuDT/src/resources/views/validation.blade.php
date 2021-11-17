
@extends('master')

@section('title','validation')

@section('content')
<div class="container">
<form action="{{ route('users.login')}}" method="post" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    name="email"
    >
    @if($errors->email->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->email->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"
    name="password"
    >
  </div>
  @if($errors->password->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->password->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"
    name="name"
    >
  </div>
  @if($errors->name->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->name->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif

    <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1"
    name="name"
    >
  </div>
  @error('name')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror -->

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


//sing in 
<form action="{{ route('users.login')}}" method="post" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    name="email"
    >
    @if($errors->email->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->email->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"
    name="password"
    >
  </div>
  @if($errors->password->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->password->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"
    name="name"
    >
  </div>
  @if($errors->name->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->name->all() as $error)
            <li >
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif

    <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1"
    name="name"
    >
  </div>
  @error('name')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror -->

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop

