<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('trevlo') }}/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('trevlo') }}/assets/images/favicons/fav.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('trevlo') }}/assets/images/favicons/fav.png" />
    <link rel="manifest" href="{{ asset('trevlo') }}/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Trevlo is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,700;0,800;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/trevlo-icons/style.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/daterangepicker-master/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('trevlo') }}/assets/css/trevlo.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ asset('trevlo') }}/assets/images/favicons/fav.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header--home-three sticky-header sticky-header--one-page">
            <div class="container">
                <div class="main-header__inner">
                    <div class="main-header__left">
                        <div class="main-header__logo">
                            <a href="index.html">
                                <img src="{{ asset('trevlo') }}/assets/images/tiketsumenep2.png" alt="Tiket Sumenep" width="146">
                            </a>
                        </div>
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink current">
                                    <a href="/">Home</a>
                                </li>
                                <li class="dropdown scrollToLink">
                                    <a href="">Informasi Tiket</a>
                                    <ul>
											<li><a href="/harga">Harga Tiket</a></li>
											<li><a href="tour-list.html">Cara Pesan</a></li>
											<li><a href="/faq">FAQ</a></li>
										</ul>
                                </li>
                                <li class="scrollToLink"><a href="/kontak">Kontak Kami</a></li>
                                <li class="scrollToLink"><a href="/cek">Cek Tiket</a></li>
                                <li class="scrollToLink"><a href="/canceltiket">Pembatalan</a></li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                    </div><!-- /.main-header__left -->

                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <div class="main-header__right-right">
                            <div class="main-header__divider"></div>
                            <ul class="main-header__search-user">
                                <li class="main-header__search-user-item">
                                    <a href="login.html" class="main-header__user">
                                        Login
                                    </a>
                                </li>
                            </ul><!-- /.main-header__search-user -->
                        </div><!-- /.main-header__right-right -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <!-- main-slider-start -->
        <section class="main-slider-three" id="home">
            <div class="container">
                <div class="main-slider-three__content">
                    <h5 class="main-slider-three__sub-title wow fadeInUp" data-wow-delay="200ms">Selamat Datang di SUMENEP</h5>
                    <h3 class="main-slider-three__title wow fadeInUp" data-wow-delay="300ms">Cara Baru <br>Untuk Berwisata</h3>
                    <div class="main-slider-three__btn wow fadeInUp" data-wow-delay="400ms">
                        <a href="pricing.html" class="trevlo-btn trevlo-btn--base"><span>Start Booking</span></a>
                    </div>
                </div>
                <div class="banner-form wow fadeInUp" data-wow-delay="300ms">
                    <div class="container">
                        <form class="banner-form__wrapper" action="https://www.bracketweb.com/trevlo-html/tour-listing-top-search.html">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="banner-form__control">
                                        <label for="location">Wisata</label>
                                        <select name="location" class="selectpicker" id="location">
                                            <option value="select">Pilih Lokasi</option>
                                            <option value="spain">Pantai Lombang</option>
                                            <option value="africa">Pulau Gililabak</option>
                                        </select>
                                        <i class="icon-location-2"></i>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="banner-form__control">
                                        <label for="date">Pilih Tanggal</label>
                                        <input class="trevlo-datepicker" id="date" type="text" name="date" placeholder="Select Date">
                                        <i class="icon-calendar-5"></i>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="banner-form__btn">
                                        <div class="banner-form__filter"></div>
                                        <button type="submit" aria-label="search submit" class="trevlo-btn trevlo-btn--base">
                                            <span><i class="icon-right-arrow"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- banner-form -->
            <div class="main-slider-three__shape-one" style="background-image: url({{ asset('trevlo') }}/assets/images/shapes/slider-3-shape-1.png);"></div>
            <div class="main-slider-three__image wow fadeInRight" data-wow-delay="200ms" style="background-image: url({{ asset('trevlo') }}/assets/images/backgrounds/banner.jpg);"></div>
        </section>
        <!-- Tour Listing two Start -->
        <section class="tour-listing-two tour-listing-two--home-three" id="tour">
            <div class="container">
                <div class="sec-title text-center">

                    <p class="sec-title__tagline">Pilihan Wisata</p><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">Pilihan Wisata Yang Bisa Anda Kunjungi</h2><!-- /.sec-title__title -->
                </div><!-- /.sec-title --><!-- /.sec-title -->
                <div class="tour-listing-one__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav trevlo-owl__carousel--with-shadow owl-theme owl-carousel" data-owl-options='{
            "items": 4,
            "margin": 30,
            "smartSpeed": 700,
            "loop":false,
            "autoplay": 6000,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 1
                },
                "500":{
                    "items": 2
                },
                "1200":{
                    "items": 3
                },
                "1400":{
                    "items": 4
                }
            }
            }'>
                    <!-- konten start -->
                    <div class="item">
                        <div class="tour-listing-two__card tour-listing__card">
                            <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                                <div class="cover">
                                    <img src="{{ asset('trevlo') }}/assets/images/tours/destinasi5.jpg" alt="{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg" class="tour-listing__card-image">
                                </div>
                                <div class="tour-listing__card-btn-group tour-listing__card-btn-group-hide">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10% Off</div>
                                    <div class="tour-listing__card-featured">Featured</div>
                                </div><!-- /.tour-listing__card-btn-group -->
                                <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                            </a><!-- /.tour-listing__card-image-box -->
                            <a href="javascript:void(0)" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing-two__card-show-content">
                                <div class="tour-listing-two__card-show-title-box">
                                    <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a href="#">Pulau Gililabak</a></h3>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing-two__card-show-camera-btn tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-show-title-box -->
                                <div class="tour-listing-two__card-show-divider"></div><!-- /.tour-listing-two__card-show-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing-two__card-show-people-text tour-listing__card-people-text text-small">
                                                12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-show-content -->
                            <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Pulau Gililabak</a></h3>
                                <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum agtilable</p>
                                <div class="tour-listing-two__card-info">
                                    <div>
                                        <div class="tour-listing__card-location-box">
                                            <span class="icon-location-1"></span>
                                            <p class="tour-listing__card-location-text text-small">Kombang, Kec. Talango</p>
                                        </div><!-- /.tour-listing__card-location-box -->
                                    </div>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-info -->
                                <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing__card-people-text text-small">12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-content -->
                        </div><!-- /.tour-listing__card -->
                    </div>
                    <!-- end konten -->
                     <!-- konten start -->
                    <div class="item">
                        <div class="tour-listing-two__card tour-listing__card">
                            <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                                <div class="cover">
                                    <img src="{{ asset('trevlo') }}/assets/images/tours/destinasi.jpg" alt="{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg" class="tour-listing__card-image">
                                </div>
                                <div class="tour-listing__card-btn-group tour-listing__card-btn-group-hide">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10% Off</div>
                                    <div class="tour-listing__card-featured">Featured</div>
                                </div><!-- /.tour-listing__card-btn-group -->
                                <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                            </a><!-- /.tour-listing__card-image-box -->
                            <a href="javascript:void(0)" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing-two__card-show-content">
                                <div class="tour-listing-two__card-show-title-box">
                                    <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a href="#">Pantai Sembilan</a></h3>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing-two__card-show-camera-btn tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-show-title-box -->
                                <div class="tour-listing-two__card-show-divider"></div><!-- /.tour-listing-two__card-show-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing-two__card-show-people-text tour-listing__card-people-text text-small">
                                                12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-show-content -->
                            <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Pantai Sembilan</a></h3>
                                <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum agtilable</p>
                                <div class="tour-listing-two__card-info">
                                    <div>
                                        <div class="tour-listing__card-location-box">
                                            <span class="icon-location-1"></span>
                                            <p class="tour-listing__card-location-text text-small">Kombang, Kec. Talango</p>
                                        </div><!-- /.tour-listing__card-location-box -->
                                    </div>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-info -->
                                <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing__card-people-text text-small">12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-content -->
                        </div><!-- /.tour-listing__card -->
                    </div>
                    <!-- end konten -->
                     <!-- konten start -->
                    <div class="item">
                        <div class="tour-listing-two__card tour-listing__card">
                            <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                                <div class="cover">
                                    <img src="{{ asset('trevlo') }}/assets/images/tours/destinasi2.jpg" alt="{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg" class="tour-listing__card-image">
                                </div>
                                <div class="tour-listing__card-btn-group tour-listing__card-btn-group-hide">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10% Off</div>
                                    <div class="tour-listing__card-featured">Featured</div>
                                </div><!-- /.tour-listing__card-btn-group -->
                                <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                            </a><!-- /.tour-listing__card-image-box -->
                            <a href="javascript:void(0)" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing-two__card-show-content">
                                <div class="tour-listing-two__card-show-title-box">
                                    <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a href="#">Pantai Kasoghi</a></h3>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing-two__card-show-camera-btn tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-show-title-box -->
                                <div class="tour-listing-two__card-show-divider"></div><!-- /.tour-listing-two__card-show-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing-two__card-show-people-text tour-listing__card-people-text text-small">
                                                12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 10.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-show-content -->
                            <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Pantai Kasoghi</a></h3>
                                <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum agtilable</p>
                                <div class="tour-listing-two__card-info">
                                    <div>
                                        <div class="tour-listing__card-location-box">
                                            <span class="icon-location-1"></span>
                                            <p class="tour-listing__card-location-text text-small">Kombang, Kec. Talango</p>
                                        </div><!-- /.tour-listing__card-location-box -->
                                    </div>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-info -->
                                <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing__card-people-text text-small">12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 10.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-content -->
                        </div><!-- /.tour-listing__card -->
                    </div>
                    <!-- end konten -->
                     <!-- konten start -->
                    <div class="item">
                        <div class="tour-listing-two__card tour-listing__card">
                            <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                                <div class="cover">
                                    <img src="{{ asset('trevlo') }}/assets/images/tours/destinasi3.jpg" alt="{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg" class="tour-listing__card-image">
                                </div>
                                <div class="tour-listing__card-btn-group tour-listing__card-btn-group-hide">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10% Off</div>
                                    <div class="tour-listing__card-featured">Featured</div>
                                </div><!-- /.tour-listing__card-btn-group -->
                                <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                            </a><!-- /.tour-listing__card-image-box -->
                            <a href="javascript:void(0)" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing-two__card-show-content">
                                <div class="tour-listing-two__card-show-title-box">
                                    <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a href="#">Pantai Lombang</a></h3>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing-two__card-show-camera-btn tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-show-title-box -->
                                <div class="tour-listing-two__card-show-divider"></div><!-- /.tour-listing-two__card-show-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing-two__card-show-people-text tour-listing__card-people-text text-small">
                                                12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-show-content -->
                            <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Pantai Lombang</a></h3>
                                <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum agtilable</p>
                                <div class="tour-listing-two__card-info">
                                    <div>
                                        <div class="tour-listing__card-location-box">
                                            <span class="icon-location-1"></span>
                                            <p class="tour-listing__card-location-text text-small">Kombang, Kec. Talango</p>
                                        </div><!-- /.tour-listing__card-location-box -->
                                    </div>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-info -->
                                <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing__card-people-text text-small">12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 100.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-content -->
                        </div><!-- /.tour-listing__card -->
                    </div>
                    <!-- end konten -->
                     <!-- konten start -->
                    <div class="item">
                        <div class="tour-listing-two__card tour-listing__card">
                            <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                                <div class="cover">
                                    <img src="{{ asset('trevlo') }}/assets/images/tours/destinasi4.jpg" alt="{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg" class="tour-listing__card-image">
                                </div>
                                <div class="tour-listing__card-btn-group tour-listing__card-btn-group-hide">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10% Off</div>
                                    <div class="tour-listing__card-featured">Featured</div>
                                </div><!-- /.tour-listing__card-btn-group -->
                                <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                            </a><!-- /.tour-listing__card-image-box -->
                            <a href="javascript:void(0)" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing-two__card-show-content">
                                <div class="tour-listing-two__card-show-title-box">
                                    <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a href="#">Pantai Salopeng</a></h3>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing-two__card-show-camera-btn tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-show-title-box -->
                                <div class="tour-listing-two__card-show-divider"></div><!-- /.tour-listing-two__card-show-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing-two__card-show-people-text tour-listing__card-people-text text-small">
                                                12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 10.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-show-content -->
                            <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Pantai Salopeng</a></h3>
                                <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum agtilable</p>
                                <div class="tour-listing-two__card-info">
                                    <div>
                                        <div class="tour-listing__card-location-box">
                                            <span class="icon-location-1"></span>
                                            <p class="tour-listing__card-location-text text-small">Kombang, Kec. Talango</p>
                                        </div><!-- /.tour-listing__card-location-box -->
                                    </div>
                                    <div class="tour-listing__card-camera-group">
                                        <a href="#" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                        "items": [
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-3.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-4.jpg"
                          },
                          {
                            "src": "{{ asset('trevlo') }}/assets/images/tours/tour-4-5.jpg"
                          }
                        ],
                        "gallery": {
                          "enabled": true
                        },
                        "type": "image"
                    }'>
                                            <span class="icon-photo-camera-1"></span>
                                        </a>
                                    </div><!-- /.tour-listing__card-camera-group -->
                                </div><!-- /.tour-listing-two__card-info -->
                                <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                                <div class="tour-listing__card-bottom">
                                    <div class="tour-listing__card-bottom-left">
                                        <div class="tour-listing__card-people">
                                            <span class="icon-Duration"></span>
                                            <p class="tour-listing__card-people-text text-small">12+</p>
                                        </div><!-- /.tour-listing__card-people -->
                                    </div><!-- /.tour-listing__card-bottom-left -->
                                    <div class="tour-listing__card-bottom-right">
                                        <h4 class="tour-listing-two__card-show-price tour-listing__card-price">Rp. 10.000</h4>
                                    </div><!-- /.tour-listing__card-bottom-right -->
                                </div><!-- /.tour-listing__card-bottom -->
                            </div><!-- /.tour-listing__card-content -->
                        </div><!-- /.tour-listing__card -->
                    </div>
                    <!-- end konten -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Tour Listing two End -->
        <section class="video-one" id="video">
            <div class="video-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ asset('trevlo') }}/assets/images/backgrounds/video-bg-1.jpg);"></div>
            <!-- /.video-one__bg -->
            <div class="container">
                <div class="video-one__content wow fadeInUp" data-wow-delay="100ms">
                    <h5 class="video-one__sub-title">Wisata Apa Aja Sih Yang Ada Di Sumenep?</h5><!-- /.video-one__sub-title -->
                    <h2 class="video-one__title">Beberapa Wisata Yang Sudah Diurutkan<br> Berdasarkan Kategori</h2><!-- /.video-one__title -->
                </div><!-- /.video-one__content -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->
        <section class="tour-type">
            <div class="tour-type__bg" style="background-image: url({{ asset('trevlo') }}/assets/images/shapes/tour-type-bg.png);"></div><!-- /.tour-type__bg -->
            <div class="container">
                <div class="sec-title text-center">

                    <p class="sec-title__tagline">Kategori</p><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">Pilih Kategori Wisata Di Bawah Ini</h2><!-- /.sec-title__title -->
                </div><!-- /.sec-title --><!-- /.sec-title -->
                <div class="row">
                    <div class="col-xl-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="tour-type__box">
                            <div class="tour-type__box__icon"><i class='bx bxs-tree-alt'></i></div>
                            <h3 class="tour-type__box__title">Pulau</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-delay="150ms">
                        <div class="tour-type__box">
                            <div class="tour-type__box__icon"><span class="icon-windsurfing-2"></span></div>
                            <h3 class="tour-type__box__title">Pantai</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="tour-type__box">
                            <div class="tour-type__box__icon"><i class='bx bx-book-open' ></i></div>
                            <h3 class="tour-type__box__title">Religi</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-delay="250ms">
                        <div class="tour-type__box">
                            <div class="tour-type__box__icon"><span class="icon-deer-silhouette-1"></span></div>
                            <h3 class="tour-type__box__title">Alam</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="tour-type__box">
                            <div class="tour-type__box__icon"><i class='bx bxs-castle'></i></div>
                            <h3 class="tour-type__box__title">Sejarah & Budaya</h3>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.tour-type -->
        <div class="client-carousel @@extraClassName">
            <div class="container">
                <h5 class="client-carousel__title"><span>2k + Brands Trust Us</span></h5>
                <div class="client-carousel__one trevlo-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "450":{
                    "items":2,
                    "margin": 0
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-normal.png" alt="trevlo">
                        <img class="client-carousel__one__item__hover" src="{{ asset('trevlo') }}/assets/images/resources/brand-1-hover.png" alt="trevlo">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <!-- CTA Two Start -->
        <section class="cta-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 wow fadeInUp" data-wow-delay="100ms">
                        <h5 class="cta-two__sub-title">Book Your Trip Now</h5>
                        <h3 class="cta-two__title">Are You Ready to Travel & Enjoy</h3>
                    </div>
                    <div class="col-lg-3 cta-two__btn wow fadeInUp" data-wow-delay="200ms">
                        <a href="contact.html" class="trevlo-btn trevloo-btn--base-three"><span>Start Booking</span></a>
                    </div>
                </div>
            </div><!-- /.container -->
        </section>
        <!-- CTA Two End -->
        <footer class="main-footer @@extraClassName">
            <div class="main-footer__bg" style="background-image: url({{ asset('trevlo') }}/assets/images/shapes/footer-bg-1-1.png);"></div>
            <!-- /.main-footer__bg -->
            <div class="container">
                <div class="main-footer__top row">
                    <div class="col-lg-4 col-sm-5">
                        <div class="main-footer__logo-box">
                            <img src="{{ asset('trevlo') }}/assets/images/tiketsuemnepfooter.png" alt="Tiket Sumenep" class="main-footer__logo">
                        </div><!-- /.main-footer__logo-box -->
                    </div>
                    <div class="col-lg-8 col-sm-7">
                        <ul class="main-footer__social">
                            <li class="main-footer__social-item">
                                <a href="https://facebook.com/" class="main-footer__social-link"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="main-footer__social-item">
                                <a href="https://linkedin.com/" class="main-footer__social-link"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="main-footer__social-item">
                                <a href="https://twitter.com/" class="main-footer__social-link"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="main-footer__social-item">
                                <a href="https://youtube.com/" class="main-footer__social-link"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul><!-- /.main-footer__logo-box -->
                    </div>
                    <div class="col-12">
                        <div class="main-footer__line"></div><!-- /.main-footer__line -->
                    </div><!-- /.col-12 -->
                </div><!-- /.main-footer__top -->
                <div class="row gutter-y-40">
                    <div class="col-lg-8 col-md-9 col-sm-11 col-xl-7 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">Tantang Kami</h2><!-- /.footer-widget__title -->
                            <p class="text-white">SumenepTiket hadir sebagai solusi inovatif bagi masyarakat untuk menikmati keindahan dan kekayaan budaya destinasi wisata di Kabupaten Sumenep. Melalui platform ini, pengunjung dapat dengan mudah mengakses informasi lengkap mengenai berbagai objek wisata, mulai dari situs sejarah, pantai yang memukau, hingga kuliner khas daerah. Dengan kemudahan pemesanan tiket berbasis online, SumenepTiket memastikan pengalaman wisata Anda lebih terencana dan nyaman, tanpa perlu repot mencari tiket secara manual. Jelajahi pesona Sumenep dengan lebih mudah dan praktis bersama SumenepTiket.</p>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-lg-6 col-md-4 col-xl-4 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Kontak</h2><!-- /.footer-widget__title -->
                            <p class="footer-widget__address">Jl. Raya Gapura Bangkal, Sumenep</p>
                            <ul class="footer-widget__info">
                                <li> <i class="icon-phone-1"></i> <a href="tel:(303)555-0105">+6285335255308</a></li>
                                <li> <i class="icon-envelope"></i> <a href="mailto:michael.mitc@example.com">septiabudiws@gmail.com</a></li>
                            </ul><!-- /.footer-widget__info -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom-inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> by Turbo-Main.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('trevlo') }}/assets/images/logo-dark.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@trevlo.com">needhelp@trevlo.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:(303)5550105">(303) 555-0105</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://facebook.com/">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://pinterest.com/">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="search-popup__btn trevlo-btn trevlo-btn--base">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <script src="{{ asset('trevlo') }}/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/owl-carousel/js/owlcarousel2-filter.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/wow/wow.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/simpleParallax/simpleParallax.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/isotope/isotope.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/countdown/countdown.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/daterangepicker-master/moment.min.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/daterangepicker-master/daterangepicker.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="{{ asset('trevlo') }}/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="{{ asset('trevlo') }}/assets/js/trevlo.js"></script>
</body>

</html>
