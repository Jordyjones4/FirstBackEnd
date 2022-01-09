<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RexSteam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
</head>
<body>
    <div class="navbarBG">
        <div class=" navbar text-white p-2 justify-content-between">
            <div class=" text-decoration-none">
                <div class="navbar-brand">
                    <a href="" class="text-white nav-item text-decoration-none">Logo</a>
                    <a href="" class="text-white nav-item text-decoration-none">RexSteam</a>
                </div>
                <a href="{{route('home')}}" class="text-white text-decoration-none ml-3">Home</a>
            </div>
            <div class="form-inline fill mh-3">
                <form class="form-inline fill mh-3" action="{{ route('search') }}" method="get" autocomplete="off" >
                    @csrf
                    <input type="text" name="search" class="Search form-control mr-sm-2" placeholder="Search">
                </form>
                    @guest
                        @if (Route::has('login'))
                            <span>
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </span>
                        @endif
                        @if (Route::has('register'))
                            <span>
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </span>
                        @endif
                    @else
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->username}}
                                <img src="{{asset(Auth::user()->profilepicture)}}" class="profilePicture ml-2" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-light" href="{{ route('Profile',Auth::id()) }}">
                                   Profile
                                </a>
                                <a class="dropdown-item bg-light" href="{{ route('ShoppingCart',Auth::id()) }}">
                                    Shopping Cart
                                </a>
                                <a class="dropdown-item bg-light" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>

                {{-- <a href="{{url('/login')}}" class="mr-1 text-white nav-link">Login </a>
                |
                <a href="" class="ml-1 text-white nav-link"> Register</a> --}}
        </div>
    </div>
    <div class="body">
        @yield('content')
    </div>

     {{-- Footer --}}
     <div class="footer navbarBG d-flex fixed-bottom p-3 mt-5 mb-0 text-white justify-content-between">
        <div><footer>&copy2021 RexSteam. All Rights Reserved.</footer></div>
        <div>Social Media images</div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
