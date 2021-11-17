@extends('.layout')

@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ __(session('status')) }}
</div>
@endif
<form action="{{ route('blog.post.deleteAll') }}">
    <div class="input-group mb-3">

        <button class="input-group-text px-4 btn-danger" id="deleteSelected">
            Delete Selected
        </button>

        <div class="input-group-text p-0">
            <select class="form-select form-select-lg shadow-none bg-light border-0">
                <option>Languages</option>
                <option>English</option>
                <option>Tiếng việt</option>
            </select>
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
                        {{-- <div class="p-2">{{ $post->id }}</div> --}}
                    </td>
                    <td>
                        <div class="p-2">{{ $post->title }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ Str::limit($post->content, 60) }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->user->name }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->user->name }}</div>
                    </td>
                    <td>
                        <div class="p-2">{{ $post->updated_at }}</div>
                    </td>
                    <td>
                        <a href="{{ route('blog.post.edit', $post->id) }}">
                            <button class="btn btn-primary btn-xs"><span>Edit</span></button>
                        </a>

                        <form action="{{ route('blog.post.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs"><span>Delete</span></button>
                        </form>
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


</script>

@endsection
