<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand"> Nayeem App </a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link"> Home </a></li>

             @if(Session::get('user_id'))

            <li><a href="{{route('about')}}" class="nav-link"> About </a></li>

            <li class="dropdown">
                <a href="{{route('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Blog Module </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('blog.add')}}" class="dropdown-item"> Add Blog </a></li>
                    <li><a href="{{route('blog.manage')}}" class="dropdown-item"> Manage Blog </a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="{{route('blog.manage')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Category Module </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Add Category </a></li>
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Manage Category </a></li>
                </ul>
            </li>
             <li><a href="{{route('password-generator')}}" class="nav-link"> Password Generator </a></li>

            @endif

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Blog Category </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($categories as $category)
                    <li><a href="{{route('blog-category', ['id' => $category->id])}}" class="dropdown-item"> {{ $category->name }} </a></li>
                    @endforeach
                </ul>
            </li>

            @if(Session::get('user_id'))
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> {{Session::get('user_name')}} </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item"> Profile </a></li>
                        <li><a href="{{route('logout')}}" class="dropdown-item"> Logout </a></li>
                    </ul>
                </li>
            @else
                <li><a href="{{route('login')}}" class="nav-link"> Login </a></li>
            @endif

        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

