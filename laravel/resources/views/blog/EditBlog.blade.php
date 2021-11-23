@extends('Blog')
@section('content')

@include('layouts.alert')
<div class="container">
    {{-- <form method="post" action="{{ route('blog.update', ['id'] >= $blog->id) }}"> --}}
    <form method="post" action="{{ $blog->id }}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.blog_title") }}</label>
            <input type="text" class="form-control" value="{{ $blog->blog_title }}" id="exampleFormControlInput1" name="blog_title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.blog_content") }}</label>
            <textarea name="blog_content" id="" class="form-control">{{ $blog->blog_content }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.created_by") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="created_by" placeholder="Created by" value="{{ $blog->created_by }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.updated_by") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="updated_by" placeholder="Created by" value="{{ $blog->created_by }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.updated_date") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="created_at" placeholder="example: 2021/11/10 20:20" value="{{ $blog->updated_at  }}">
        </div>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
</div>
@endsection