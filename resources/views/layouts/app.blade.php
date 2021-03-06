<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>{{config('app.name')}}</title>
<link rel="icon" href="{{asset('img/logo/11.png')}}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('layouts.css')
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk"></script> --}}
    <!--Start of Tawk.to Script-->
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e360f7b90e82b00128d0a15&cms=sop' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e360f7b90e82b00128d0a15&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e360f7b90e82b00128d0a15&product=email-list-builder&cms=sop' async='async'></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e2c71e0daaca76c6fcfd800/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/modal.js')}}"></script>
</head>

<body class="skin-blue sidebar-mini">
    <nav class="navbar navbar-inverse navbar-static-top navbar-justify">
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
                <a class="navbar-brand pull-left" href="{{ url('/') }}">
                <img src="{{asset('img/logo/11.png')}}" height="70px" style="margin-top:-20px">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="font-size:15px;font-family:Arial, Helvetica, sans-serif">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/academia') }}" style="color:white;font-weight:bold;margin-top:10px">Academia</a></li>
                    <li><a href="{{ url('/logistics') }}" style="color:white;font-weight:bold;margin-top:10px">Shop</a></li>
                    <li><a href="{{ url('/News') }}" style="color:white;font-weight:bold;margin-top:10px">News </a></li>
                    <li><a href="{{ route('politics.home') }}" style="color:white;font-weight:bold;margin-top:10px">Politics</a></li>
                    <li><a href="{{ url('/blog') }}" style="color:white;font-weight:bold;margin-top:10px">Blog</a></li>
                    {{-- <li><a href="{{ route('opinion.home') }}" style="color:white;font-weight:bold;margin-top:10px">Opinions</a></li> --}}
                    <li><a href="{{ route('others.all') }}" style="color:white;font-weight:bold;margin-top:10px">Others</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if(!Auth::check())
                    {{-- <li><a href="{{ url('/register') }}" style="color:white;font-weight:bold;margin-top:10px">Register</a></li>
                    <li><a href="{{ url('/login') }}" style="color:white;font-weight:bold;margin-top:10px">Login</a></li> --}}
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
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dfd935ad1993c93"></script>

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