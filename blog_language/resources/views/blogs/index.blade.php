@extends('blogs.master')

@section('content')
	<div class="container">
		<ul class="mt-3" style="list-style: none;">
			<li><img src="{{asset('/image/ukflog.png')}}" width="20px" > <a href="/blog/en" style="text-decoration: none"> {{__('blogLang.en')}}</a></li>
			<li><img src="{{asset('/image/vnflang.png')}}" width="20px" > <a href="/blog/vn" style="text-decoration:none"> {{__('blogLang.vn')}}</a></li>
		</ul>
		<a href="#" class="btn btn-danger mt-3" id="deleteCheckAll">{{__('blogLang.delete_all')}}</a>	
		<table class="table mt-1">
			<thead>
				<tr>
				<th><input type="checkbox" id="CheckBoxAll" name=""></th>
				<th>{{__('blogLang.blog_title')}}</th>
				<th>{{__('blogLang.blog_content')}}</th>
				<th>{{__('blogLang.created_by')}}</th>
				<th>{{__('blogLang.updated_by')}}</th>
				<th>{{__('blogLang.updated_date')}}</th>
				<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($bgs as $blog)
				<tr id="sid{{$blog->id}}">
					<td><input type="checkbox" class="checkBoxClass" name="ids" value="{{$blog->id}}"></td>
					<td>{{$blog->blog_title}}</td>
					<td>{{$blog->blog_content}}</td>
					<td>{{$blog->created_by}}</td>
					<td>{{$blog->updated_by}}</td>
					<td>{{$blog->updated_at}}</td>
					<td>					
							<a href="{{route('blog.edit',['blog'=>$blog->id])}}" class="btn btn-primary">{{__('blogLang.edit')}}</a>				
					</td>
					<td>
						<form action="{{route('blog.destroy',['blog'=>$blog->id])}}" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" class="btn btn-danger" name="" value="{{__('blogLang.delete')}}">	
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<center>{!! $bgs->links() !!}</center>
	</div>
	<script type="text/javascript">
		$(function(e){
			$('#CheckBoxAll').click(function(){
				$('.checkBoxClass').prop('checked',$(this).prop('checked'));
			});
			$("#deleteCheckAll").click(function(e){
				e.preventDefault();
				var allids=[];
				$("input:checkbox[name=ids]:checked").each(function(){
						allids.push($(this).val());
				});
				$.ajax({
					url:"{{route('blog.delSelected')}}",
					type:"DELETE",
					data:{
						_token:$("input[name=_token]").val(),
						ids:allids
					},
					success:function(response)
					{
						$.each(allids,function(key,val){
							$("#sid"+val).remove();
						})
					}
				});
			});
		});
	</script>
@endsection()