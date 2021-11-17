@extends('../layouts.app')
@section('content')
<a href="/helo/en"><img src="/img/en.png" style="height: 30px;" alt=""></a>

<a href="/helo/vn"><img src="/img/vn.jpg" style="height: 30px;" alt=""></a>
<h3>{{__('class.index.tittle')}}</h3>

<div>
    <ul>
        @foreach($errors->all() as $error)
        <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
</div>
<form action="{{route('class.update',['class'=>$class->id])}}" method="POST">
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">{{__('class.index.name')}}</label>
        <input type="text" name="name" id="name" class="form-control col-sm-10" value="{{$class->name}}">
    </div>
    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">{{__('class.index.description')}}</label>
        <textarea name="description" id="description" class="form-control col-sm-10">{{$class->description}}</textarea>
    </div>
    <div class="form-group row">
        <label for="created_at" class="col-sm-2 col-form-label">{{__('class.index.created_at')}}</label>
        <textarea name="created_at" id="created_at" class="form-control col-sm-10">{{$class->created_at}}</textarea>
    </div>
    <div class="form-group row">
        <label for="updated_at" class="col-sm-2 col-form-label">{{__('class.index.updated_at')}}</label>
        <textarea name="updated_at" id="updated_at" class="form-control col-sm-10">{{$class->updated_at}}</textarea>
    </div>

    <div class="form-group row">
        <input type="submit" class="form-control col-sm-2" value="{{__('class.index.edit')}}">
        <input type="reset" class="form-control col-sm-2" value="{{__('class.index.delete')}}">
    </div>
    @csrf
</form>


@endsection