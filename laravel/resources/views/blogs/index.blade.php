@extends('layouts.master')

@section('content')
    <main class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h1>Blog</h1>

                </div>
                <div class="col-md-6">
                    <a href="{{ route('blogs.create') }}" class="btn btn-success float-right m-2">@lang('messages.add')</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button id="deleteAll" class="btn btn-danger">@lang('messages.delete')</button>
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @lang('messages.language')
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('lang/en') }}">@lang('messages.english')</a>
                    <a class="dropdown-item" href="{{ url('lang/vi') }}">@lang('messages.vietnamese')</a>
                </div>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkboxAll">
                            <label class="form-check-label" for="flexCheckDefault"> </label>
                        </div>
                    </th>
                    <th scope="col">@lang('messages.title')</th>
                    <th scope="col">@lang('messages.content')</th>
                    <th scope="col">@lang('messages.author')</th>
                    <th scope="col">@lang('messages.update_day')</th>
                    <th scope="col">@lang('messages.action')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr id="{{ $blog->id }}">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input checkbox-item" type="checkbox" id="checkboxItem"
                                    id_blog="{{ $blog->id }}">
                                <label class="form-check-label" for="flexCheckDefault"> </label>
                            </div>
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->update_date }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">@lang('messages.edit')</a>
                            <a href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-danger">@lang('messages.delete')</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </main>

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
        })

        $('#deleteAll').click(function() {
            $('.checkbox-item').each(function() {
                let id = $(this).attr('id_blog');
                if (this.checked) {
                    $.ajax({
                        url: "blog/delete/" + id,
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
