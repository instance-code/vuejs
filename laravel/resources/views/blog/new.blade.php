<div class="container mt-4"> 
    <a href = "{{ route('blog.index') }}"> @lang('lang.home') </a> <br> <br>
    
    <div class="row">
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

    <h3> @lang('lang.CREATE_A_BLOG') </h3>

    <div>
        <ul> 
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

    <form action="{{route('blog.store')}}" method="POST"> 
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">@lang('lang.blog_title')</label>
            <input type="text" name="title" id="title" class="form-control col-sm-10">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="content">@lang('lang.blog_content')</label>
            <textarea name="content" id="content" class="form-control col-sm-10"> </textarea>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="created_by">@lang('lang.created_by')</label> 
            <input type="text" name="created_by" id="created_by" class="form-control col-sm-10">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="updated_by">@lang('lang.updated_by')</label> 
            <input type="text" name="updated_by" id="updated_by" class="form-control col-sm-10">
        </div>
        <br>

        <div class="form-group row col-sm-3">
            <div class="col-sm-6">
                <input type="submit" class="form-control btn btn-primary col-sm-1" value="@lang('lang.save')">
            </div>
            <div class="col-sm-6">
                <input type="reset" class="form-control btn btn-primary col-sm-1" value="@lang('lang.reset')">
            </div>  
        </div>
    </form>
</div>
