<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <!-- Logo -->
            <div class="header-left">
                <div class="logo">
                    <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="menu-wrapper  d-flex align-items-center">
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav> 
                            <ul id="navigation">                                                                                          
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">Tentang Kami</a></li>
                                <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="/services">Pelayanan</a></li>
                                <li class="{{ Request::is('cucian') ? 'active' : '' }}"><a href="/cucian">Cucian Anda</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 
            @auth
                @if (auth()->user()->role == 'admin') 
                    <div class="header-right d-none d-lg-block">
                        <a href="/dashboard" class="header-btn2">Dashboard</a>
                    </div>
                 @elseif (auth()->user()->role == 'Kasir') 
                    <div class="header-right d-none d-lg-block">
                        <a href="/kasir/laundry" class="header-btn2">Kembali</a>
                    </div>
                @elseif (auth()->user()->role == 'Pencuci') 
                    <div class="header-right d-none d-lg-block">
                        <a href="/pencuci" class="header-btn2">Kembali</a>
                    </div>
                @elseif (auth()->user()->role == 'Kurir') 
                    <div class="header-right d-none d-lg-block">
                        <a href="/kurir" class="header-btn2">Kembali</a>
                    </div>
                @endif
            @else
            <div class="header-right d-none d-lg-block">
                <a href="/login" class="header-btn2">Login</a>
            </div>
            @endauth
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>