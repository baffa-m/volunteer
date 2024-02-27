<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="logo-light-mode">
                <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
            </span>
            <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                @guest
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#login-popup">
                    <div class="login-btn-primary"><span class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></span></div>
                    <div class="login-btn-light"><span class="btn btn-icon btn-pills btn-light"><i data-feather="settings" class="fea icon-sm"></i></span></div>
                </a>
                @endguest
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light nav-right">
                <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>
                <li><a href="{{ route('opportunities') }}" class="sub-menu-item">Find Opportunities</a></li>
                <li><a href="{{ route('recruit-volunteers.index') }}" class="sub-menu-item">Recruit Volunteers</a></li>
                <li><a href="{{ route('about') }}" class="sub-menu-item">About Us </a></li>
                <li><a href="{{ route('contact.us') }}" class="sub-menu-item">Contact us</a></li>
                <li><a href="#" class="sub-menu-item">Sign Up</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
