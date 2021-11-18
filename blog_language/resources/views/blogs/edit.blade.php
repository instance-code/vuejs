@extends('blogs.master')

@section('content')
	<div class="container">
		<form class="mt-5" method="POST" action="{{route('blog.update',['blog'=>$bgs->id])}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label class="mt-4">Blog title</label>
				<input type="text" class="form-control" value="{{$bgs->blog_title}}" name="blog_title"/>
			     <div class="text-danger">
				  @if($errors->has('blog_title'))
					{{$errors->first('blog_title')}}
				@endif
				</div>    
			</div>
			<div>
				<label class="mt-4">Blog content</label>
				<textarea class="form-control" name="blog_content">
					{{$bgs->blog_content}}
				</textarea>
				<div class="text-danger">
				  @if($errors->has('blog_content'))
				{{$errors->first('blog_content')}}
				@endif
				</div> 
			</div>
			<div>
				<label class="mt-4">Updated by</label>
				<input type="text" name="updated_by" value="{{$bgs->updated_by}}" class="form-control"/>
			</div>
			<div>
				<label class="mt-4">Created Date</label>
				<input type="text" name="created_at" class="form-control" value="{{$bgs->created_at}}" />
					<div class="text-danger">
					  @if($errors->has('created_at'))
					{{$errors->first('created_at')}}
					@endif
					</div>
			</div>
			<input type="submit" class="btn btn-primary mt-3" value="Save" name="">
		</form>

	</div>
@endsection