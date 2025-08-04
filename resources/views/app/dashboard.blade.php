<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>
    @include('partials.head')

</head>

<body class="">
    @include('partials.switcher')

    <div class="page">
        @include('partials.sidebar')
        @include('partials.header')

        <div class="content">
            @yield('content')
        </div>

        @include('partials.search-modal')

        @include('partials.footer')

    </div>

    @include('partials.scripts')

</body>

</html>
