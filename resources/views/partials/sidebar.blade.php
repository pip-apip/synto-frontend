<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('assets/img/brand-logos/desktop-logo.png') }}" alt="logo"
                class="main-logo desktop-logo">
            <img src="{{ asset('assets/img/brand-logos/toggle-logo.png') }}" alt="logo" class="main-logo toggle-logo">
            <img src="{{ asset('assets/img/brand-logos/desktop-dark.png') }}" alt="logo"
                class="main-logo desktop-dark">
            <img src="{{ asset('assets/img/brand-logos/toggle-dark.png') }}" alt="logo"
                class="main-logo toggle-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar " id="sidebar-scroll">

        @php
            $page = isset($page) ? $page : 'dashboard';
        @endphp

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item {{ $page == 'dashboard' ? 'active' : '' }}">
                        <i class="ri-home-8-line side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">General</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('user.index') }}" class="side-menu__item {{ $page == 'user' ? 'active' : '' }}">
                        <i class="ri-user-line side-menu__icon"></i>
                        <span class="side-menu__label">User</span>
                    </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub {{ $page == 'logs' ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="side-menu__item {{ $page == 'logs' ? 'active' : '' }}">
                        <i class="ri-settings-5-line side-menu__icon"></i>
                        <span class="side-menu__label">Settings</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 {{ $page == 'logs' ? 'active' : '' }}">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Settings</a></li>
                        <li class="slide {{ $page == 'logs' ? 'active' : '' }}"><a href="{{ route('logs.index') }}" class="side-menu__item {{ $page == 'logs' ? 'active' : '' }}">Logs</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
