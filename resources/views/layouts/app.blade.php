<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>{{config('app.name')}}</title>
<link rel="icon" href="img/logo.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('layouts.css')
    @yield('css')
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk"></script> --}}
    <script>
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5df45ea143be710e1d2208ff/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
	});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/modal.js')}}"></script>
</head>

<body class="skin-blue sidebar-mini">
    <nav class="navbar navbar-default navbar-static-top navbar-justify" style="background-color:#562fc6">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/logo.png')}}" height="40">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="font-size:15px;font-family:Arial, Helvetica, sans-serif">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/academia') }}" style="color:white;font-weight:bold;margin-top:10px">Academia</a></li>
                    <li><a href="{{ url('/logistics') }}" style="color:white;font-weight:bold;margin-top:10px">Logistics</a></li>
                    <li><a href="{{ url('/News') }}" style="color:white;font-weight:bold;margin-top:10px">News </a></li>
                    <li><a href="{{ route('politics.home') }}" style="color:white;font-weight:bold;margin-top:10px">Politics</a></li>
                    <li><a href="{{ url('/blog') }}" style="color:white;font-weight:bold;margin-top:10px">Blogs </a></li>
                    <li><a href="{{ url('/home') }}" style="color:white;font-weight:bold;margin-top:10px">Opinions</a></li>
                    <li><a href="{{ url('/home') }}" style="color:white;font-weight:bold;margin-top:10px">Others</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if(!Auth::check())
                    <li><a href="{{ url('/register') }}" style="color:white;font-weight:bold;margin-top:10px">Register</a></li>
                    <li><a href="{{ url('/login') }}" style="color:white;font-weight:bold;margin-top:10px">Login</a></li>
                    @else
                    <li><a href="{{ route('cart.index') }}" style="color:white;font-weight:bold;margin-top:10px"><i class="fa fa-shopping-cart"></i><sup class="color:red">{{
                        App\Cart::where([
                        'user'=>Auth::user()->email,
                        'deleted_at'=>null
                        ])->get()->count() ?? ''}}</sup></a></li>
                    <li><a href="{{ url('/Cart') }}" style="color:white;font-weight:bold;margin-top:10px"><i class="fa fa-heart"></i><sup class="color:red">{{ App\Wishlist::where(['user'=>Auth::user()->email,'deleted_at'=>null])->count() ?? '' }}</sup></a></li>
                    <li><a href="/home" style="color:white;font-weight:bold;margin-top:10px">Dashboard</a></li>
                    <a href="{{ url('/logout') }}" class="btn btn-flat" style="color:white;font-weight:bold;margin-top:10px"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery 3.1.1 -->
  @include('layouts.js')
</body>
</html>


{{-- color is : #ff4900 --}}