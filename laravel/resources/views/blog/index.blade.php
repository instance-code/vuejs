@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>


                                        <div class="checkAll">
                                            <label class="label">
                                                <input class="js-check-all" type="checkbox" name=""
                                                    data-check-all="language">
                                            </label>
                                        </div>




                    </div>
                    </th>

                    <th scope="col">id</th>

                    <th scope="col">{{ __('blogedit.blog_title') }}</th>
                    <th scope="col">{{ __('blogedit.blog_content') }}</th>
                    <th scope="col">{{ __('blogedit.created_by') }}</th>
                    <th scope="col">{{ __('blogedit.updated_by') }}</th>
                    <th scope="col">{{ __('blogedit.updated_date') }}</th>
                    <th scope="col">#</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $blog)
                            <tr>
                                <th>

                                    <ul class="js-check-all-target list" style="list-style: none" data-check-all="language">
                                        <li class="item">
                                            <label class="label">
                                                <input type="checkbox" name="language" value="language1">
                                                <span class="text"></span>
                                            </label>
                                        </li>

                                    </ul>
                                </th>
                                <th scope="row">{{ $key }}</th>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blog_content }}</td>
                                <td>{{ $blog->created_by }}</td>
                                <td>{{ $blog->updated_by }}</td>
                                <td>{{ $blog->updated_at }}</td>
                                <td>
                                    <form action="{{ route('blog.destroy', [$blog->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xoá danh mục truyện này không');"
                                            class="btn btn-danger">{{ __('blogedit.delete') }}</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('blog.edit', [$blog->id]) }}"
                                        class="btn btn-primary">{{ __('blogedit.edit') }}</a>
                                    <form action="" method="post">
                                        @method('PUT')
                                        @csrf

                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
