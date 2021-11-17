@extends('.layout')

@section('content')

<div class="container px-5 my-5">
    <form action="{{ route('blog.post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" name="title" id="title" type="text" value="{{ $post->title }}" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="content">Content</label>
            <textarea class="form-control" name="content" id="content" type="text" placeholder="Content"
                style="height: 10rem;">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="createdBy">Created By</label>
            <input class="form-control" id="createdBy" type="text" placeholder="Created By"
                value="{{ $post->user->name }}" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="createdDate">Created Date</label>
            <input class="form-control" id="createdDate" type="text" placeholder="Created Date"
                value="{{ $post->created_at }}" />
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</div>


@endsection
