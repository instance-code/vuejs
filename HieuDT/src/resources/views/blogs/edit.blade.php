@extends('master')

@section('title','edit blog')

@section('content')
<div class="container">
<form action="{{route('blogs.update',$blog->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{__('messages.title')}}</label>
    <input type="text" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" 
     value="{{$blog->title}}"
     name="title"
     >
    @if($errors->has('title'))
        <span class="text-danger">{{$errors->first('title')}}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('messages.content')}}</label>
    <input type="text" class="form-control" id="exampleInputPassword1"
     value="{{$blog->content}}"
     name="content"
     >
     @if($errors->has('content'))
        <span class="text-danger">{{$errors->first('content')}}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >{{__('messages.created_by')}}</label>
    <input type="text" class="form-control"
     id="exampleInputPassword1" value="{{$blog->created_by}}"
     name="created_by"
     >
     @if($errors->has('created_by'))
        <span class="text-danger">{{$errors->first('created_by')}}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('messages.created_at')}}</label>
    <input type="text" class="form-control"
     id="exampleInputPassword1" value="{{$blog->created_at}}"
     name="created_at"
     >
     @if($errors->has('created_at'))
        <span class="text-danger">{{$errors->first('created_at')}}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
</form>
</div>
@stop