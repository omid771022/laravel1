@extends('parts.layout.main')
@section('name')ثبت نام @endsection
@section('content')

    @include('parts.topmune')
    <div class="container">
        @include('parts.massges')

        <div class="d-flex justify-content-center">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی </label>
                    <input type="text" class="form-group  @error('name') is-invalid @enderror "   name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

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
                    <label >رمز عبور  تکرار</label>
                    <input type="password" class="form-group @error('password_confirmation') is-invalid @enderror" name="password_confirmation" >
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-success">ثبت نام  </button>
                </div>


            </form>

        </div>
    </div>


@endsection
