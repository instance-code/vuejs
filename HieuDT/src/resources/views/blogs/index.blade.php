@extends('master')

@section('title','lang')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

<script>
  function changeAll(checkAll) {
    if (checkAll.checked) {
      checkboxes = document.getElementsByName('checkbox');
      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true;
      }
    } else {
      checkboxes = document.getElementsByName('checkbox');
      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = false;
      }
    }
  }

  function deleteByChecked() {
    var arr = [];
    checkboxes = document.getElementsByName('checkbox');
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked == true) {
        arr.push(checkboxes[i].getAttribute('blog-id'));
      }
    }
    //lay token
    const el_token = document.getElementsByName('csrf-token');
    const token = el_token[0].getAttribute('content');

    this.userAction(arr);
  }

  async function userAction(arr) {
    try {
      const res= await axios.post(`http://localhost:82/blogs/deleteByChecked`,arr);
    } catch (error) {
      console.log(error);
    }
     
  }
</script>
<div class="container">
  <button class="btn btn-danger" onclick="deleteByChecked(this)">{{__('messages.delete')}}</button>
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      {{__('messages.change-lang')}}
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('changeLang',['lang'=>'en'])}}">EN</a></li>
      <li><a class="dropdown-item" href="{{route('changeLang',['lang'=>'vi'])}}">VI</a></li>
    </ul>
  </div>
  <a class="btn btn-primary" href="{{route('blogs.create')}}">{{__('messages.add')}}</a>
  <table class="table">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <thead>
      <tr>
        <th scope="col">
          <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" name="checkboxAll" onchange="changeAll(this)">

        </th>
        <th scope="col">{{__('messages.title')}}</th>
        <th scope="col-6">{{__('messages.content')}}</th>
        <th scope="col">{{__('messages.created_by')}}</th>
        <th scope="col">{{__('messages.created_at')}}</th>
        <th scope="col">{{__('messages.action')}}</th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>

        <th scope="row">
          <input class="form-check-input mt-0" name="checkbox" blog-id="{{$blog->id}}" type="checkbox" value="" aria-label="Checkbox for following text input">
        </th>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
        <td>{{$blog->created_by}}</td>
        <td>{{$blog->created_at}}</td>
        <td style="display: flex;">
          <form method="get" action="{{route('blogs.show', $blog->id)}}">
            <button class="btn btn-primary" type="submit">{{__('messages.edit')}}</button>
          </form>
          <form method="post" action="{{route('blogs.delete', $blog->id)}}" onsubmit="return confirm('are u sure?');">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit">
              {{__('messages.delete')}}</button>
          </form>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>

  <br>

  <form action="http://localhost:82/test-checkbox" method="post">
        @csrf
        <table>
            <tr>
              <td><input type="checkbox" name="checkbox" value="1"></td> 
            </tr>
            <tr>
               <td><input type="checkbox" name="checkbox" value="2"></td> 
             </tr>
             <tr>
               <td><input type="checkbox" name="checkbox" value="3"></td> 
             </tr>
             <tr>
               <td><input type="checkbox" name="checkbox" value="4"></td> 
             </tr>
           
        </table>
        <button type="submit">submit</button>
    </form>

</div>

@stop