@extends('Blog')
@section('content')
<div class="container">
    <div>
        <button type="button" class="btn btn-danger" id="deleteAll">Delete</button>
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('blog.lang', ['lang'=>'en']) }}">English</a>
            <a class="dropdown-item" href="{{ route('blog.lang', ['lang'=>'vi']) }}">Vietnamese</a>
        </div>
    </div>

    @include('layouts.alert')

    <table class="table">
        <thead>
        <tr>
            <th>
                <input type="checkbox" id="checkboxAll" >
            </th>
            <th scope="col">{{ __("lang.blog_title") }}</th>
            <th scope="col">{{ __("lang.blog_content") }}</th>
            <th scope="col">{{ __("lang.created_by") }}</th>
            <th scope="col">{{ __("lang.updated_by") }}</th>
            <th scope="col">{{ __("lang.updated_date") }}</th>
            <th scope="col">
                <a href="http://localhost:8888/vuejs/laravel/public/create_blog">
                    <button type="button" class="btn btn-primary">Add</button>
                </a>
            </th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($blogs as $blog)
        <tr id="{{ $blog->id }}">
            <th scope="row">
                <input type="checkbox" class="checkbox-item" id_blog="{{ $blog->id }}">
            </th>
            <td>{{ $blog->blog_title }}</td>
            <td>{{ $blog->blog_content }}</td>
            <td>{{ $blog->created_by }}</td>
            <td>{{ $blog->updated_by }}</td>
            <td>{{ $blog->updated_at }}</td>
            <td>
                <a href="edit_blog/{{ $blog->id }}">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            </td>
            <td>
                <a href="delete_blog/{{ $blog->id }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

@section('js')
    <script>
        $('#checkboxAll').click(function() {
            if (this.checked) {
                $('.checkbox-item').each(function() {
                    this.checked = true;
                })
            } else {
                $('.checkbox-item').each(function() {
                    this.checked = false;
                })
            }
        });
        $('#deleteAll').click(function() {
            $('.checkbox-item').each(function() {
                let id = $(this).attr('id_blog');
                if (this.checked) {
                    $.ajax({
                        url: "delete_blog/" + id,
                        type: "GET",
                    }).done(function(response) {
                        $('tr#' + id).remove();
                    }).fail(function(error) {
                    })
                }
            })
        })
    </script>
@endsection