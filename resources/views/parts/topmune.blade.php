
<div style="padding: 40px;">
    <nav class="navbar navbar-expand-sm ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('categories')}}" class="btn btn-primary">دسته بندی ها</a>
            </li>
            <li>
                <a href="{{ route('create') }}" class="btn btn-warning"> دسته بندی جدید</a>
            </li>

            <li>
                <a href="{{ route('register') }}" class="btn btn-primary">ثبت نام کاربر جدید</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="btn btn-primary">ورود</a>
            </li>
            <li>
     <form action="{{route('logout')}}" method="post">
         @csrf
         <button type="submit" class="btn-primary btn ">خروج</button>
     </form>
            </li>

        </ul>
    </nav>

    <hr>
</div>