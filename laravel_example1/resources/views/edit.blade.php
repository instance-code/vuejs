<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="margin-top:50px">
                    <form action="{{ route('update', ['id'=>$data->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">{{__('postlang.blog_title')}}</label>
                            <input type="text" class="form-control" name="blog_title" value="{{$data->blog_title }}">
                            <p style="color:red">{{ $errors->first('blog_title') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">{{__('postlang.blog_content')}}</label>
                            <textarea class="form-control" name="blog_content">{{ $data->blog_content }}</textarea>
                            <p style="color:red">{{ $errors->first('blog_content') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">{{__('postlang.created_by')}}</label>
                            <input type="text" class="form-control" name="created_by" value="{{ $data->created_by }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{__('postlang.created_date')}}</label>
                            <input type="text" class="form-control" name="created_at" value="{{ $data->created_at }}">
                            <p style="color:red">{{ $errors->first('created_at') }}</p>
                        </div>
                        <button type="submit" name="btn-update" class="btn btn-primary">{{__('postlang.save')}}</button>
                    </form>
                </div>            
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
