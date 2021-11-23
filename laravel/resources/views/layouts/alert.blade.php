@if (Session::has('messege'))
    <div class="alert alert-success">
        {{ Session::get('messege') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif