@extends('parts.layout.main')
@section('title')ویرایش@endsection
@section('content')
    @include('parts.topmune')
    <div class="container">
        @include('parts.massges')
        <div class="d-flex justify-content-center">
            <form action="{{route('update',$catgory->id)}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">عنوان دسته بندی</label>
                    <input type="text" class="form-group  @error('title') is-invalid @enderror "  value="{{$catgory->title}}" name="title">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label >شرح دسته بندی </label>
                    <textarea  class="form-group @error('description') is-invalid @enderror"  name="description">{{$catgory->description}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label >وضیعت </label>
                    <select name="active">
                        <option value="1">منتشر شده </option>
                        <option value="0">منتشر نشده</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">ویرایش</button>
                </div>
            </form>
        </div>
    </div>
@endsection