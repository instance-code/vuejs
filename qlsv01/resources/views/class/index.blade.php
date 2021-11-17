@extends('../layouts.app')
@section('content')
<!-- Example single danger button -->

<a href="/welcome/en"><img src="/img/en.png" style="height: 30px;" alt=""></a>

<a href="/welcome/vn"><img src="/img/vn.jpg" style="height: 30px;" alt=""></a>


<h3>{{__('class.index.tittle')}}<h3>


        <form action="{{ route('deleteall') }}" method="post">
            @csrf
            <button type="button" class="btn btn-danger"><input class="btn btnsuccess" type="submit" name="submit"
                    value="Delete All Users" /></button>


            <table class="table">
                <tr>
                    <th scope="col">
                        <input type="checkbox" value="" id="checkAll">
                    </th>
                    <th scope="col">{{__('class.index.name')}}</th>
                    <th scope="col">{{__('class.index.description')}}</th>
                    <th scope="col">{{__('class.index.created_at')}}</th>
                    <th scope="col">{{__('class.index.updated_at')}}</th>
                    <th scope="col">{{__('class.index.action')}}</th>
                </tr>

                @foreach($classes as $class)
                <tr>
                    <th scope="row"> <input type="checkbox" name="exercise[]" value="{{ $class->id }}"></th>
                    <td>{{$class->name}}</td>
                    <td>{{$class->description}}</td>
                    <td>{{$class->created_at}}</td>
                    <td>{{$class->updated_at}}</td>
                    <td>
                        <a href="{{route('class.edit',['class'=>$class->id])}}"><button type="button"
                                class="btn btn-primary">{{__('class.index.edit')}}</button></a>
                        |

                        <a href="{{route('xoa',$class->id)}}"><button type="button"
                                class="btn btn-primary">{{__('class.index.delete')}}</button></a>

                    </td>
                </tr>
                @endforeach

            </table>
            <div>
                {{$classes->onEachSide(5)->links()}}

            </div>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script language="javascript">
            $("#checkAll").click(function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        </script>

        @endsection