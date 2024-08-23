<div class="page-header row">
    <div class="header-logo-wrapper col-auto">
        <div class="logo-wrapper"><a href="/dashboard/superAdmin"><img class="img-fluid for-light"
                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo.png" alt="" /><img
                    class="img-fluid for-dark"
                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo_light.png" alt="" /></a>
        </div>
    </div>
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700 mb-1">E-Tiket Wisata Sumenep</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="/dashboard/superAdmin"> <i data-feather="home"> </i></a></li>
                {{-- <li><strong style="margin: 0 8px;">/</strong>Dashboard </li>
                <li><strong style="margin: 0 8px;">/</strong>Default</li> --}}
                {!! $titleHeader !!}
            </ol>
        </nav>
    </div>
    <!-- Page Header Start-->
    <div class="header-wrapper col m-0">
        <div class="row">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Search Mofi .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="/dashboard/superAdmin"><img class="img-fluid"
                            src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo.png" alt=""></a>
                </div>
                <div class="toggle-sidebar">
                    <svg class="stroke-icon sidebar-toggle status_toggle middle">
                        <use href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#toggle-icon"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li>
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative d-flex align-items-center">
                                    <svg class="search-bg svg-color">
                                        <use
                                            href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#search">
                                        </use>
                                    </svg>
                                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="Search Mofi .." name="q" title="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="fullscreen-body"><span>
                            <svg id="maximize-screen">
                                <use href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#full-screen">
                                </use>
                            </svg></span>
                    </li>
                    <li>
                        <div class="mode">
                            <svg>
                                <use href="{{ asset('') }}assets/Admin-Mofi/assets/svg/icon-sprite.svg#moon"></use>
                            </svg>
                        </div>
                    </li>
                    <style>
                        .profile-img-wrapper {
                            width: 40px;
                            /* Tentukan lebar gambar */
                            height: 40px;
                            /* Tentukan tinggi gambar, sama dengan lebar */
                            border-radius: 50%;
                            /* Membuat gambar bulat sempurna */
                            overflow: hidden;
                            /* Menjaga gambar tetap di dalam area bulat */
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .profile-img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            /* Memastikan gambar tidak terdistorsi */
                        }
                    </style>
                    <li class="profile-nav onhover-dropdown px-0 py-0">
                        <div class="d-flex profile-media align-items-center">
                            <div class="profile-img-wrapper">
                                <img class="profile-img"
                                    src="{{ asset('pictures/profile/admin/' . Auth::user()->profile) }}"
                                    alt="Profile Picture">
                            </div>
                            <div class="flex-grow-1">
                                <span>{{ Auth::user()->name }}</span>
                                <p class="mb-0 font-outfit">
                                    {{ ucfirst(Auth::user()->role) }}
                                    <i class="fa fa-angle-down"></i>
                                </p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="/profile"><i data-feather="user"></i><span>Account</span></a></li>
                            <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Log out</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
          <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
          <div class="ProfileCard-details">
          <div class="ProfileCard-realName">Rofie</div>
          </div>
          </div>
        </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
    </div>
    <!-- Page Header Ends -->
</div>
