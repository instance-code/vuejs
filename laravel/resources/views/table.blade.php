<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .container {
            margin-top: 3em;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('blog.deleteAll') }}" method="get">
            @csrf
            <div class="dropdown">
                <button type="submit" class="btn btn-danger btn-delete" disabled>@lang('lang.delete')</button>
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    @lang('lang.language')
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('lang/en') }}">English</a>
                    <a class="dropdown-item" href="{{ url('lang/vi') }}">Vietnamese</a>
                </div>
            </div>
            <br/>
            @if(Session::has('msg'))
                <p style="color:red;">{{ Session::get('msg') }}</p>
            @endif
            <div class="table">
                <table class="table">
                    <tr>
                        <th width="30px"><input type="checkbox" id="checkall" name="" class="checkboxAll"></th>
                        <th width="70px">@lang('lang.title')</th>
                        <th width="200px">@lang('lang.content')</th>
                        <th width="100px">@lang('lang.createBy')</th>
                        <th width="100px">@lang('lang.updateBy')</th>
                        <th width="100px">@lang('lang.updateDate')</th>
                        <th width="100px"></th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="item1" name="item[]" class="checkboxItem" value="1"></td>
                        <td>Doe</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>@Doe</td>
                        <td>@example</td>
                        <td>2021/11/20 10:20</td>
                        <td>
                            <a href="{{ route('blog.create',1) }}" class="btn btn-primary">@lang('lang.edit')</a>
                            <a href="{{ route('blog.delete',1) }}" class="btn btn-danger">@lang('lang.delete')</a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="item2" name="item[]" class="checkboxItem" value="2"></td>
                        <td>Mark</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>@Mark</td>
                        <td>@example</td>
                        <td>2021/11/20 10:20</td>
                        <td>
                            <a href="{{ route('blog.create',2) }}" class="btn btn-primary">@lang('lang.edit')</a>
                            <a href="{{ route('blog.delete',2) }}" class="btn btn-danger">@lang('lang.delete')</a>
                        </td>
                    </tr>
                    <script>
                        $(".checkboxAll").change(function() {
                            var $self = $(this);
                            var ischeck = $self.prop('checked');
                            $(".checkboxItem").prop('checked', ischeck);
                            if ($(this).is(":checked")) {
                                $('.btn-delete').attr('disabled', false);
                            } else {
                                $('.btn-delete').attr('disabled', true);
                            }
                        });
                        $(".checkboxItem").change(function() {
                            let isExistCheck = false;
                            $(".checkboxItem").each(function() {
                                if ($(this).is(":checked")) {
                                    isExistCheck = true;
                                }
                            })
                            if (isExistCheck) {
                                $('.btn-delete').attr('disabled', false);
                            } else {
                                $('.btn-delete').attr('disabled', true);
                                $(".checkboxAll").prop('checked', false);
                            }
                            if($(this).prop('checked') == false) {
                                $(".checkboxAll").prop('checked', false);
                            }
                            if($('.checkboxItem:checked').length == $('.checkboxItem').length){
                                $(".checkboxAll").prop('checked', true);
                            }
                        });
                    </script>
                </table>
            </div>
        </form>
    </div>
</body>
</html>