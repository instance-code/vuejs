@extends('Blog')
@section('content')

@include('layouts.alert')
<div class="container">
    <form action="{{ route('post-create') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.blog_title") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.blog_content") }}</label>
            {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_content"> --}}
            <textarea name="blog_content" id="" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.created_by") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Created by" name="created_by">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.updated_by") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Updated by" name="updated_by">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ __("lang.updated_date") }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="example: 2021/11/10 20:20" name="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection