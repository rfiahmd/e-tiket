@extends('landing-page.layout.detailwisata')

@section('content')

        <!-- Tour Listing Details One Start -->
        <section class="tour-listing-details tour-listing-details-right">
            <div class="tour-listing-details__destination">
                <div class="container">
                    <div class="tour-listing-details__destination-row row">
                        <div class="col-xl-4 wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <div class="tour-listing-details__destination-left">
                                <h3 class="tour-listing-details__dastination-title">{{ $wisata->nama_wisata }}</h3>
                                <h4 class="tour-listing-details__dastination-price"><span>Rp. 10.000</span><span class="tour-listing-details__dastination-person">/ Kepala</span></h4>
                            </div><!-- /.tour-listing-details__daetination-left -->
                        </div><!-- /.col-xl-4 -->
                        <div class="col-xl-8">
                            <div class="tour-listing-details__destination-right">
                                <div class="tour-listing-details__destination-info wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <span class="icon-clock-1"></span>
                                    <div class="tour-listing-details__destination-info-title">
                                        <h4 class="tour-listing-details__destination-info-top">Waktu Operasi</h4>
                                        <h4 class="tour-listing-details__destination-info-bottom">08.00 - 17.00</h4>
                                    </div>
                                </div><!-- /.tour-listing-details__destination-info -->
                                <div class="tour-listing-details__destination-info wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                    <span class="icon-location-1"></span>
                                    <div class="tour-listing-details__destination-info-title">
                                        <h4 class="tour-listing-details__destination-info-top">Lokasi</h4>
                                        <h4 class="tour-listing-details__destination-info-bottom">{{ $wisata->alamat_lengkap }}</h4>
                                    </div>
                                </div><!-- /.tour-listing-details__destination-info -->
                            </div><!-- /.tour-listing-details__destination-right -->
                        </div><!-- /.col-xl-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.tour-listing-details__destination -->

            <div class="container">
                <div class="tour-listing-details__row row">
                    <div class="col-xl-8">
                        <div class="tour-listing-details__overview">
                            <div class="wow animated fadeIn" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <div class="image_wrapper_detail">
                                    <img class="image_detail" src="{{ asset('pictures/wisata/'. $wisata->gambar_wisata) }}" alt="">
                                </div>
                                <h3 class="tour-listing-details__title tour-listing-details__overview-title">Deskripsi</h3>
                            </div>
                            <p class="tour-listing-details__overview-text wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">{{ $wisata->deskripsi }}</p>
                        </div><!-- /.tour-listing-details__explore -->
                        <div class="tour-listing-details__included">
                            <h3 class="tour-listing-details__title tour-listing-details__included-title">Fasilitas dan Permainan</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-7 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <ul class="tour-listing-details__included-list-one">
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Parkir</p>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Toilet</p>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Menunggangi Kuda</p>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Motor ATV</p>
                                        </li>
                                    </ul><!-- /.tour-listing-details__included-list-one -->
                                </div><!-- /.col-lg-6 col-md-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.tour-listing-details__included -->
                        <div class="tour-listing-details__included">
                            <h3 class="tour-listing-details__title tour-listing-details__included-title">Syarat & Ketentuan</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-7 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <ul class="tour-listing-details__included-list-one">
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Menjaga Kebersihan Tempat Wisata</p>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <p>Mengikuti Himbauan Dan Petunjuk Petugas Wisata</p>
                                        </li>
                                    </ul><!-- /.tour-listing-details__included-list-one -->
                                </div><!-- /.col-lg-6 col-md-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.tour-listing-details__included -->
                        <div class="tour-listing-details__included">
                            <h3 class="tour-listing-details__title tour-listing-details__included-title">Kontak Admin Wisata</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-7 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <ul class="tour-listing-details__included-list-one">
                                        <li>
                                            <i class='bx bxl-whatsapp'></i>
                                            <p>Menjaga Kebersihan Tempat Wisata</p>
                                        </li>
                                        <li>
                                            <i class='bx bxl-gmail' ></i>
                                            <p>Mengikuti Himbauan Dan Petunjuk Petugas Wisata</p>
                                        </li>
                                    </ul><!-- /.tour-listing-details__included-list-one -->
                                </div><!-- /.col-lg-6 col-md-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.tour-listing-details__included -->
                        <div class="tour-listin g-details__location">
                            <h3 class="tour-listing-details__title tour-listing-details__location-title"></h3>
                            <!-- <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.543569380049!2d114.05991769161945!3d-6.917864822326893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9f7276ab8c685%3A0xe6566e3638889a6!2sPantai%20Lombang!5e0!3m2!1sid!2sid!4v1722419106521!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div> -->
                        </div>
                    </div><!-- /.col-xl-8 -->
                    <div class="col-xl-4">
                        <aside class="tour-listing-details__sidebar">
                            <div class="tour-listing-details__sidebar-book-tours tour-listing-details__sidebar-single wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <h3 class="tour-listing-details__sidebar-title">Book Tours</h3>
                                <form action="" class="tour-listing-details__sidebar-form contact-form-validated">
                                    <div class="tour-listing-details__sidebar-form-input">
                                        <input type="text" placeholder="Nama Wisata" name="where_to">
                                    </div>
                                    <div class="tour-listing-details__sidebar-form-input">
                                        <input type="text" name="date" placeholder="Pilih Tanggal" id="datepicker" class="tour-listing-details__sidebar-form-date trevlo-datepicker">
                                        <i class="tour-listing-details__sidebar-form-date-arrow fas fa-angle-down"></i>
                                    </div>
                                    <a href="/paket/{{ $wisata->wisata_id }}" class="tour-listing-details__sidebar-btn trevlo-btn trevlo-btn--base"><span>Book
                                            Now</span></a>
                                </form>
                                <div class="result"></div><!-- /.result -->
                            </div>
                        </aside><!-- /.tour-listing-details__sidebar -->
                    </div><!-- /.col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Tour Listing Details One End -->

@endsection
