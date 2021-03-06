<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>{{config('app.name')}}</title>
<link rel="icon" href="img/logo.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('layouts.css')
    @yield('css')
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

    </script>
</head>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header" style="background-color:#222222 !important">
    
            <!-- Logo -->
            <a href="/" class="logo" style="background-color:#222222 !important">
                <img src="{{asset('img/logo/11.png')}}" height="50" width="100px">
            </a>
            
            <!-- Header Navbar -->
            <nav class="navbar navbar-inverse navbar-static-top navbar-justify" style="background-color:#222222 !important">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu" style="font-family:'Times New Roman', Times, serif">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    
        <!-- Left side column. contains the logo and sidebar -->
        <div>
            @if(Auth::user()->status==1)
            @include('layouts.sidebar')
            @endif
        </div>         
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(Auth::user()->status==1)
                  @yield('content')
                  @endif
                  @if(Auth::user()->status==0)
                 <div class="container-fluid" style="padding-top:20px">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:white !important">
                            <h1 class="text-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;&nbsp;Access Denied</h1>
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center"><i class="fa fa-phone" style="color:red"></i>&nbsp;&nbsp;Contact Your Administrator for Access</h1>
                        </div>
                    </div>
                 </div>
                  @endif
        </div>
    
        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © <?php echo date('Y');?> <a href="#">flora|Digest</a>.</strong> All rights reserved.
        </footer>
    </div>
    @yield('scripts')
    @include('layouts.js')
</body>
</html>