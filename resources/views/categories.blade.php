@extends('parts.layout.main')
@section('title') فرم@endsection
@section('content')
    @include('parts.layout.header')




@include('parts.topmune')
    <div class="container">


        @include('parts.massges')
    <div class="d-flex justify-content-center">

        <table class="table">
<thead>
<tr>
    <td>شناسه</td>
    <td>عنوان </td>
    <td>توضیحات</td>
    <td>وضیعت انتشار</td>
    <td>ویرایش</td>
     <td>حذف</td>
</tr>
</thead>
<body>
@foreach($catgorys as $catgory)
    <tr>
        <td>{{$catgory->id}}</td>
        <td><a href="{{route('show',$catgory->id)}}">{{ $catgory->title }}</a> </td>
        <td>{{ $catgory->description}}</td>
        <td>{{ $catgory->active}}</td>
        <td><a href="{{route('edit',$catgory->id)}}">ویرایش</a></td>
        <td><a href="{{route('destroy',$catgory->id)}}" onclick="confirm('ایتم مورد نظر حذف شود ؟')">حذف</a> </td>
    </tr>
@endforeach
</body>
</table>
    </div>
    </div>
@include('parts.layout.footer')
@endsection

