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
</head>

<body class="skin-blue sidebar-mini">
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
</body>
</html>


{{-- color is : #ff4900 --}}