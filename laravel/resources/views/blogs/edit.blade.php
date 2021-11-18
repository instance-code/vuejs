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
    <form action="{{route('post.update',[$posts->id])}}" method="post">    
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">@lang('lang.blogTitle')</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="blog_title" value="{{$posts->blog_title}}">
            @if($errors->has('blog_title'))
                <div class="alert alert-danger">{{ $errors->first('blog_title') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.blogContent')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="blog_content" value="{{$posts->blog_content}}">
            @if($errors->has('blog_content'))
                <div class="alert alert-danger">{{ $errors->first('blog_content') }}</div>
            @endif
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.createdBy')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="created_by" value="{{$posts->created_by}}">
            @if($errors->has('created_by'))
                <div class="alert alert-danger">{{ $errors->first('created_by') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.updatedBy')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="updated_by" value="{{$posts->updated_by}}">
            @if($errors->has('updated_by'))
                <div class="alert alert-danger">{{ $errors->first('updated_by') }}</div>
            @endif
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.updatedDate')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="updated_date" value="{{$posts->updated_date}}">
            @if($errors->has('updated_date'))
                <div class="alert alert-danger">{{ $errors->first('updated_date') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary" id="btnSubmit">@lang('lang.save')</button>

    </form>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
</body>
</html>