<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard.php"><img src="img/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard.php"><img src="img/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            {{-- <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="img/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">Nahidul Islam</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div> --}}

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li ><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            
            <li><a href="{{route('admin.site')}}"><i class="fa fa-desktop"></i> <span>Manage Site</span></a></li>
            
            <li><a href="{{route('admin.profile')}}"><i class="fa fa-user"></i> <span>Manage Profile</span></a></li>
            
            <li class="menu-list"><a href="#"><i class="fa fa-cogs"></i> <span>Manage Services</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('admin.service.create')}}">Add Service</a></li>
                    <li><a href="{{route('admin.service.list')}}">List Services</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-image"></i> <span>Manage Portfolios</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('admin.portfolio.create')}}">Add Portfolio</a></li>
                    <li><a href="{{route('admin.portfolio.list')}}">List Portfolios</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-tasks"></i> <span>Manage Skills</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('admin.skill.create')}}">Add Skill</a></li>
                    <li><a href="{{route('admin.skill.list')}}">List Skills</a></li>
                </ul>
            </li>

            <li><a href="{{route('admin.contact')}}"><i class="fa fa-envelope"></i> <span>Manage Contact</span></a></li>

            <!--multi level menu end-->

            <li class="menu-list">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>

    </div>
</div>
<!-- left side end-->

<!-- main content start-->
<div class="main-content" >

    <!-- header section start-->
    <div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--notification menu start -->
    {{-- <div class="menu-right">
        <ul class="notification-menu">
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <img src="img/photos/user-avatar.png" alt="" />
                    Nahidul Islam
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
            </li>

        </ul>
    </div> --}}

    <!--notification menu end -->

    </div>
    <!-- header section end-->
