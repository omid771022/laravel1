@extends('parts.layout.main')
@section('title') فرم@endsection
@section('content')
    @include('parts.layout.header')




@include('parts.layout.topmune')
    <div class="container">
    <div class="d-flex justify-content-center">

        <table class="table">
<thead>
<tr>
    <td>شناسه</td>
    <td>عنوان </td>
    <td>توضیحات</td>
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
        <td>ویرایش</td>
        <td>حذف</td>
    </tr>
@endforeach
</body>
</table>
    </div>
    </div>
@include('parts.layout.footer')
@endsection

