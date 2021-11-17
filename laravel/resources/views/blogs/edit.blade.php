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
    <!-- @foreach($posts as $post) -->

    <form action="{{ route('post.edit',[$post->id]) }}" method="post">
    <!-- @csrf -->
        <div class="form-group">
            <label for="exampleInputEmail1">@lang('lang.blogTitle')</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="blog_title" value="{{ $post->blog_title }}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.blogContent')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.createdBy')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.updateBy')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('lang.updatedDate')</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <button type="submit" class="btn btn-primary" id="btnSubmit">@lang('lang.save')</button>
        
    </form>
    <!-- @endforeach -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
</body>
</html>