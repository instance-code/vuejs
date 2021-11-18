<div class="container mt-4">   

    <a href = "{{ route('blog.create') }}"> @lang('lang.create_a_blog') </a> <br>

    <div class="row">
        <!-- <button type="button" id="DeleteAll" class="btn btn-danger" style="float:left; margin-right: 10pt">@lang('lang.delete_all')</button> -->
        <a href="#" class="btn btn-danger" id="DeleteAll"> @lang('lang.delete_all') </a>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">@lang('lang.language')
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{url('lang/en')}}">English</a></li>
                <li><a href="{{url('lang/vi')}}">Tiếng Việt</a></li>
            </ul>
        </div>
    </div>    
    
    <center> <h3>@lang('lang.LIST_OF_BLOG')</h3> </center>

    <table class="table table-striped">
        <tr>
            <th><input type="checkbox" id="CheckAll"></th>
            <th>@lang('lang.blog_title')</th>
            <th>@lang('lang.blog_content')</th>
            <th>@lang('lang.created_by')</th>
            <th>@lang('lang.updated_by')</th>
            <th>@lang('lang.updated_date')</th>
            <th></th> 
            <th></th>           
        </tr>

        @foreach($blogs as $blog)
        <tr id="sid{{$blog->id}}">
            <td>
                <input type="checkbox" name="ids" class="checkBoxClass" value="{{$blog->id}}">     
            </td>
            <td>{{$blog->title}}</td> 
            <td>{{$blog->content}}</td>
            <td>{{$blog->created_by}}</td>
            <td>{{$blog->updated_by}}</td>
            <td>{{$blog->updated_at}}</td>
            <td>
                <a href="{{ route('blog.edit', ['blog' => $blog->id] )}}">
                    <button class="btn btn-primary"> @lang('lang.edit') </button>
                </a>
            </td>
            <td>
                <form action="{{route('blog.destroy', ['blog' => $blog->id] )}}" method="POST"> 
                    @method('DELETE')
                    <input type="submit" value="@lang('lang.delete')" class="btn btn-danger">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

