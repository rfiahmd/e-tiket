<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo_light.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo-icon.png" alt=""></a>
        </div>
        @if (auth()->user()->role === 'Super Admin')
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo-icon.png"
                                    alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="pin-title sidebar-main-title">
                            <div>
                                <h6>Pinned</h6>
                            </div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="lan-1">General</h6>
                            </div>
                        </li>
                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/dashboard/superAdmin">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-home">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-home">
                                    </use>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Pages</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/kategori">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-file">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-file">
                                    </use>
                                </svg>
                                <span>Kategori</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-editors">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-editors">
                                    </use>
                                </svg>
                                <span>Operator</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="operator_admin">Admin</a></li>
                                <li><a href="operator_karyawan">Karyawan</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/paket_wisata">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-support-tickets">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-support-tickets">
                                    </use>
                                </svg>
                                <span>Paket Wisata</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/pembayaran">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-board">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-board">
                                    </use>
                                </svg>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-layout">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-layout">
                                    </use>
                                </svg>
                                <span>Rekap Customer</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="/rekap">Rekapitulasi</a></li>
                                <li><a href="layout-rtl.html">Scan</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/transaksi">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-ecommerce">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-ecommerce">
                                    </use>
                                </svg>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/wisata">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-maps">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-maps">
                                    </use>
                                </svg>
                                <span>Wisata</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>User</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-user">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-user">
                                    </use>
                                </svg>
                                <span>Users</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="profile">Profile</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        @endif
        @if (auth()->user()->role === 'Admin')
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo-icon.png"
                                    alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="pin-title sidebar-main-title">
                            <div>
                                <h6>Pinned</h6>
                            </div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="lan-1">General</h6>
                            </div>
                        </li>
                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/dashboard/admin">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-home">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-home">
                                    </use>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Pages</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/operator_karyawan">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-editors">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-editors">
                                    </use>
                                </svg>
                                <span>Karyawan</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/paket_wisata">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-support-tickets">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-support-tickets">
                                    </use>
                                </svg>
                                <span>Paket Wisata</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/pembayaran">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-board">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-board">
                                    </use>
                                </svg>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-layout">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-layout">
                                    </use>
                                </svg>
                                <span>Rekap Customer</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="/rekap">Rekapitulasi</a></li>
                                <li><a href="layout-rtl.html">Scan</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/transaksi">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-ecommerce">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-ecommerce">
                                    </use>
                                </svg>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/wisata">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-maps">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-maps">
                                    </use>
                                </svg>
                                <span>Wisata</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>User</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-user">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-user">
                                    </use>
                                </svg>
                                <span>Users</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="profile">Profile</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        @endif
        @if (auth()->user()->role === 'Karyawan')
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo-icon.png"
                                    alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="pin-title sidebar-main-title">
                            <div>
                                <h6>Pinned</h6>
                            </div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="lan-1">General</h6>
                            </div>
                        </li>
                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/dashboard/karyawan">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-home">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-home">
                                    </use>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Pages</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/pembayaran">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-board">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-board">
                                    </use>
                                </svg>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-layout">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-layout">
                                    </use>
                                </svg>
                                <span>Rekap Customer</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="/rekap">Rekapitulasi</a></li>
                                <li><a href="layout-rtl.html">Scan</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="/transaksi">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-ecommerce">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-ecommerce">
                                    </use>
                                </svg>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>User</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#stroke-user">
                                    </use>
                                </svg>
                                <svg class="fill-icon">
                                    <use
                                        href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#fill-user">
                                    </use>
                                </svg>
                                <span>Users</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="profile">Profile</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        @endif
    </div>
</div>
<!-- Page Sidebar Ends-->
