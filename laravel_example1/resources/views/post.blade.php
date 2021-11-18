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
        <div class="col-sm-8" style="margin-top: 50px">
            <button class="btn btn-danger">{{__('postlang.delete')}}</button>
            <span class="dropdown">
                <button type="button" data-toggle="dropdown" >{{__('postlang.language')}}<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('language', ['lang'=>'en']) }}">English</a></li>
                    <li><a href="{{ route('language', ['lang'=>'vi']) }}">Vietnamese</a></li>
                </ul>
            </span>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>{{__('postlang.blog_title')}}</th>
                        <th>{{__('postlang.blog_content')}}</th>
                        <th>{{__('postlang.created_by')}}</th>
                        <th>{{__('postlang.updated_by')}}</th>
                        <th>{{__('postlang.updated_date')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $value->blog_title }}</td>
                        <td>{{ $value->blog_content }}</td>
                        <td >{{ $value->created_by }}</td>
                        <td style="width: 12%">{{ $value->updated_by }}</td>
                        <td style="width: 15%">{{ $value->updated_at }}</td>
                        <td style="width: 12%">
                            <a href="{{ route('edit', ['id'=>$value->id]) }}" class="btn btn-sm btn-primary">{{__('postlang.edit')}}</a>
                            <a href="{{ route('destroy', ['id'=>$value->id]) }}" class="btn btn-sm btn-danger">{{__('postlang.delete')}}</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </div>
        </table>
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
