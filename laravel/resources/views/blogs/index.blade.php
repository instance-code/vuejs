@extends('layouts.admin')

@push('styles')


@endpush
@push('scripts')
  <script>

    const checkAllEl = document.getElementById('checkall'),
      checkboxEls = document.querySelectorAll('.checkbox');

    // click vao checkall
    checkAllEl.addEventListener('click', function(event) {
        event.preventDefault();
      checkboxEls.forEach(el => el.checked = this.checked);
    }, false);


  </script>

@endpush

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create</a>
      <button class="btn btn-danger">Delete</button>
      <div class="alert alert-warning">
        {{ session('messages') }}
      </div>
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>
                <input id="checkall" type="checkbox" />
              </th>
              <th>title</th>
              <th>created</th>
              <th>create by</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @forelse($blogs as $blog)
            <tr>
              <td>
                <input class="checkbox" type="checkbox" name="ids[]" value="{{ $blog->id }}" />
              </td>
              <td>{{ $blog->title }}</td>
              <td>{{ $blog->content }}</td>
              <td>{{  $blog->created_at }}</td>
              <td>{{  $blog->user_id }}</td>
              <td>
                <a href="{{ route('blogs.edit', [ 'id' => $blog->id ]) }}" class="btn btn-primary">Edit</a>
                <button
                    data-id="{{ $blog->id }}"
                    data-url="{{ route('blogs.destroy') }}"
                    class="btn btn-danger">Delete</button>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center">khong co du lieu blog</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop
