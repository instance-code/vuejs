@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- @include('alert') --}}
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- --}}
                    <form method="post" action="{{route('blog.update',[$blog->id])}} ">
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('blogedit.blog_title')}}</label>
                            <input type="text" class="form-control" id="title" name="blog_title" >
                            @error('blog_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">{{__('blogedit.blog_content')}} </label>
                            <input type="text" class="form-control" id="slug" name="blog_content">
                            @error('blog_content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">{{__('blogedit.created_by')}} </label>
                            <input type="text" class="form-control" id="slug" name="created_by">
                            @error('created_by')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">{{__('blogedit.created_date')}}</label>
                            <input type="text" class="form-control" id="slug" name="created_date">
                          </div>  
                          @error('created_date')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror         
                        <button type="submit" class="btn btn-primary">Save </button>
                        @csrf
                      </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
