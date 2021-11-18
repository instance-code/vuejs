<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">   
  
</head>
<body>
  <div>
    <div class="dropdown">
      <a href="" type="button" class="btn btn-danger">@lang('lang.delete')</a>
      
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        @lang('lang.language')
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="dropdown-item" href="locale/vi">vietnamese</a>
        <a class="dropdown-item" href="locale/en">english</a>
      </ul>
    </div>
  </div>
  

  <table class="table">
    <thead>
      <tr>
        <th><input type="checkbox" onclick="setAllCheckbox('allBlog',this)" name="checkall"></th>
        <th>id</th>
        <th scope="col">@lang('lang.blogTitle')</th>
        <th scope="col">@lang('lang.blogContent')</th>
        <th scope="col">@lang('lang.createdBy')</th>
        <th scope="col">@lang('lang.updatedBy')</th>
        <th scope="col">@lang('lang.updatedDate')</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="allBlog">
      @foreach($posts as $post)
      <tr id="row1">
        <th><input type="checkbox" name="check" id="checkbox1"></th>
        <td>{{ $post->id }}</td>
        <td>{{ $post->blog_title }}</td>
        <td>{{ $post->blog_content }}</td>
        <td>{{ $post->created_by }}</td>
        <td>{{ $post->updated_by }}</td>
        <td>{{ $post->updated_date }}</td>
        <td><a href="{{ route('post.edit',[$post->id]) }}" type="button" class="btn btn-primary">@lang('lang.edit')</a></td>
        <td><a href="{{ route('post.delete',[$post->id]) }}" type="button" class="btn btn-danger">@lang('lang.delete')</a></td>
     
      </tr>
      @endforeach
    
      <p id="test"></p>
    </tbody>
  </table>

  <script>
    const setAllCheckbox = (blog, checkbox) => {
      let el = document.getElementById(blog);
      let input = el.getElementsByTagName('input');
      for(let i=0; i<input.length; i++){
        input[i].checked = checkbox.checked;
      }
    };
   
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
</body>
</html>