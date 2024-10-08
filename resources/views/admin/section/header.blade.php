<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <title>پنل مدیریت</title>
</head>
<body>

<header> <!--    start header-->
    <DIV class="right">
        <span>پیشخوان</span>
    </DIV>

    <DIV class="left">
        <div class="avatar">
            <img src="images/user-avatar.jpg" alt="">
        </div>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <ul class="navProfileDropdown">

{{-- and family start new again --}}
            <li class="head">
                <a href="#">
                    <img src="images/user-avatar.jpg" alt="image">
                    <span class="labelName">نام  نام خانوادگی فرد</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/exit-profile.jpg"/>
                    <span >خروج</span>
                </a>
            </li>

        </ul>
        <div class="notification">
            <img src="images/notifications-bell-button.png" alt="">
        </div>
    </DIV>
</header><!-- this end header -->
