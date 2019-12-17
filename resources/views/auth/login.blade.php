@extends('parts.layout.main')
@section('name')ورود کاربران @endsection
@section('content')

@include('parts.topmune')
<div class="container">
    @include('parts.massges')

    <div class="d-flex justify-content-center">
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label >ایمیل</label>
                <input type="email" class="form-group @error('password') is-invalid @enderror" name="email" value="{{old('email')}}">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="form-group">
                <label >رمز عبور </label>
                <input type="password" class="form-group @error('password') is-invalid @enderror" name="password" >
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label >مرا بخاطر بسپار  </label>
                <input type="checkbox" class="form-group " name="remember" >

            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success">ورود</button>
            </div>
        </form>
    </div>
</div>
@endsection
