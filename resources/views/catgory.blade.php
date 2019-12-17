@extends('parts.layout.main')
@section('title')نمایش@endsection
@section('content')



@include('parts.topmune')
    <div class="container">
        <div class="d-flex justify-content-center">

            <table class="table">


                    <tr>
                        <td>{{$catgory->id}}</td>
                        <td>{{$catgory->title}}</td>
                        <td>{{$catgory->description}}</td>
                        <td>ویرایش</td>
                        <td>حذف</td>
                    </tr>


</table>
        </div>
    </div>


@endsection
