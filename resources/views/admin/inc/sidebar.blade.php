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
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
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
            </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li ><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-list"><a href="{{route('admin.profile')}}"><i class="fa fa-user"></i> <span>Manage Profile</span></a></li>
            <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Manage Slider</span></a>
                <ul class="sub-menu-list">
                    <li><a href="create-slider.php">Add Slider</a></li>
                    <li><a href="list-slider.php">List Slider</a></li>
                </ul>
            </li>

            <li><a href="list-customer.php"><i class="fa fa-users"></i> <span>Manage Customer</span></a></li>

            <li class="menu-list"><a href="#"><i class="fa fa-th-large"></i> <span>Manage Category</span></a>
                <ul class="sub-menu-list">
                    <li><a href="create-category.php">Add Category</a></li>
                    <li><a href="list-category.php">List Category</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-sitemap"></i> <span>Manage Subcategory</span></a>
                <ul class="sub-menu-list">
                    <li><a href="create-subcategory.php">Add Subcategory</a></li>
                    <li><a href="list-subcategory.php">List Subategory</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-cutlery"></i> <span>Manage Product</span></a>
                <ul class="sub-menu-list">
                    <li><a href="create-product.php">Add Product</a></li>
                    <li><a href="list-product.php">List Product</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-shopping-cart"></i> <span>Manage Orders</span></a>
                <ul class="sub-menu-list">
                    <li><a href="list-order.php">List Order</a></li>
                    <li><a href="order-details.php">Order Details</a></li>
                </ul>
            </li>
            <!--multi level menu end-->

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
    <div class="menu-right">
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
    </div>
    <!--notification menu end -->

    </div>
    <!-- header section end-->
