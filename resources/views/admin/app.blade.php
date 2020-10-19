@include('admin.inc.top')

<body class="sticky-header">

    <!--sidebar nav start-->
        @include('admin.inc.sidebar')
    <!--sidebar nav end-->


        @yield('content')

@include('admin.inc.bottom')