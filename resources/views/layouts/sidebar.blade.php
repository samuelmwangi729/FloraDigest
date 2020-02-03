<aside class="main-sidebar" id="sidebar-wrapper" style="background-color:#222222 !important">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="text-center">
                @if (Auth::guest())
                <p>{{ config('app.name') }}</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>