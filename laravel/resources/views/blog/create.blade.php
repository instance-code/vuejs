@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('alert')
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('chapter.store')}}" enctype="multipart/form-data">
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">blog title</label>
                            <input type="text" class="form-control" id="title" name="tieude" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">blog content </label>
                            <input type="text" class="form-control" id="slug" name="slug_chapter">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">created by </label>
                            <input type="text" class="form-control" id="slug" name="slug_chapter">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">created date</label>
                            <input type="text" class="form-control" id="slug" name="slug_chapter">
                          </div>           
                        <button type="submit" class="btn btn-primary">Save </button>
                        @csrf
                      </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
