@extends('../layouts.app')
@section('content')
<a href="/helo/en"><img src="/img/en.png" style="height: 30px;" alt=""></a>

<a href="/helo/vn"><img src="/img/vn.jpg" style="height: 30px;" alt=""></a>   

<h3>THEM Lop</h3>

<div>
    <ul>
        @foreach($errors->all() as $error)
        <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
</div>

<form action="{{route('class.store')}}" method="POST">
   
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">{{__('class.index.name')}}</label>
        <input type="text" name="name" id="name" class="form-control col-sm-10">
    </div>
    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">{{__('class.index.description')}}</label>
        <textarea name="description" id="description" class="form-control col-sm-10"></textarea>
    </div>
    <div class="form-group row">
        
        <input type="submit"  class="form-control col-sm-2" value="{{__('class.new.add')}}">
        <input type="reset"  class="form-control col-sm-2" value="{{__('class.new.reset')}}">
    </div>
    @csrf 
</form>


@endsection

