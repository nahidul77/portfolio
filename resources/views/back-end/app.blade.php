@include('back-end.inc.top')

<body class="sticky-header">

    <!--sidebar nav start-->
        @include('back-end.inc.sidebar')
    <!--sidebar nav end-->

        @include('alert.messages')
        @yield('content')

@include('back-end.inc.bottom')