@extends('.layout')
@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ __(session('status')) }}
</div>
@endif
@error('id')
<div class="alert alert-danger">
    {{ $message }}
</div>
@enderror
<form action="{{ route('blog.post.deleteAll') }}" method="POST">
    @csrf
    <div class="input-group mb-3">
        <button class="input-group-text px-4 btn-danger" id="deleteSelected">
            Delete Selected
        </button>
        <div class="input-group-text p-0">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @if (session('locale') === 'vi')
                    {{ __('vi') }}
                    @else
                    {{ __('en') }}
                    @endif
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('language', 'vi') }}">{{ __('vi') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('language', 'en') }}">{{ __('en') }}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="table table-responsive">
        <table id="table" class="table table-bordred table-striped">
            <thead>
                <th><input type="checkbox" class="form-check-input" id="checkall" /></th>
                <th>{{ __('blog_title') }}</th>
                <th>{{ __('blog_content') }}</th>
                <th>{{ __('created_by') }}</th>
                <th>{{ __('updated_by') }}</th>
                <th>{{ __('updated_date') }}</th>
                <th>{{ __('action') }}</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="border-bottom">
                    <td>
                        <input type="checkbox" name="id[]" class="form-check-input" id="checkall"
                            value="{{ $post->id }}" />
                    </td>
                    <td>
                        <div class="p-2">{{ $post->title }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ Str::limit($post->content, 60) }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->userCreated->name }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->userUpdated->name }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->updated_at }}</div>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('blog.post.edit', $post->id) }}"><span>{{
                                __('edit') }}</span></a>
                        <a href="{{ route('blog.post.delete', $post->id) }}" class="btn btn-danger btn-xs"><span>{{
                                __('delete') }}</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $posts->links() !!}
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#checkall").click(function () {
	    $('input:checkbox').not(this).prop('checked', this.checked);
	});

    $('div.alert').delay(3000).slideUp(300);
</script>

@endsection
