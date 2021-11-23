@extends('layouts.admin')

@push('styles')


@endpush
@push('scripts')


@endpush

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{ route('blogs.store') }}" method="post">
        @include('blogs.form')
      </form>
    </div>
  </div>
</div>

@stop
