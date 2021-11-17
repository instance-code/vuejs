@extends('.layout')

@section('content')

<div class="container px-5 my-5">
    <div>
        <a href="{{ route('blog.index') }}">Return</a>
    </div>

    <form action="{{ route('blog.post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input class="form-control @error('title')
                is-invalid
            @enderror" name="title" id="title" type="text" value="{{ $post->title }}" />
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label" for="content">Content</label>
            <textarea class="form-control @error('content')
                is-invalid
            @enderror" name="content" id="content" type="text" placeholder="Content"
                style="height: 10rem;">{{ $post->content }}</textarea>
        </div>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label" for="createdBy">Created By</label>
            <input class="form-control" id="createdBy" type="text" placeholder="Created By"
                value="{{ $post->userCreated->name }}" disabled />
        </div>
        <div class="mb-3">
            <label class="form-label" for="createdDate">Created Date</label>
            <input class="form-control" id="createdDate" type="text" placeholder="Created Date"
                value="{{ $post->created_at }}" disabled />
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</div>


@endsection
