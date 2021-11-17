@extends('master')

@section('title','lang')

@section('content')

<div class="container">
  <button class="btn btn-danger">Delete</button>
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Action
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">EN</a></li>
      <li><a class="dropdown-item" href="#">VI</a></li>
    </ul>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">
          <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
        </th>
        <th scope="col">Title</th>
        <th scope="col-6">Content</th>
        <th scope="col">Created by</th>
        <th scope="col">Updated at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>

        <th scope="row">
          <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
        </th>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
        <td>{{$blog->created_by}}</td>
        <td>{{$blog->created_at}}</td>
        <td style="display: flex;">
          <button class="btn btn-primary">Edit</button>
          <form method="post" action="{{url('blogs/'. $blog->id)}}">
          @method('delete')
          @csrf
          <button class="btn btn-danger"
            type="submit"
          >
          Delete</button>
          </form>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@stop