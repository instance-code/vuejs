<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
    <main class="container">
        @if (isset($blog))
            <h1>@lang('messages.edit_blog')</h1>
        @else
            <h1>@lang('messages.create_blog')</h1>
        @endif
        {{-- form --}}
        <div class="col-md-12">
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
        <form action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}" method="post"
            style="margin-top: 10px">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label>@lang('messages.title')</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Title" value="{{ $blog->title ?? old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>@lang('messages.content')</label>
                    <input type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                        id="content" placeholder="Content" value="{{ $blog->content ?? old('content') }}">
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>@lang('messages.author')</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                        id="author" placeholder="Author" value="{{ $blog->author ?? old('author') }}">
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>@lang('messages.update_day')</label>
                    <div class="input-group date" id="datepicker">
                        <input type="text" name="update_date" id="update_date"
                            class="form-control @error('update_date') is-invalid @enderror"
                            value="{{ $blog->update_date ?? old('update_date') }}">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                    @error('update_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">@lang('messages.save')</button>
            </div>
        </form>

    </main>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>

</html>
