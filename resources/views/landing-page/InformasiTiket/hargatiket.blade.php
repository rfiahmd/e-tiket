@extends('landing-page.layout.template')

@section('content')

      <!-- Pricing Page Start -->
      <section class="pricing-page section-space">
        <div class="container">
          <div class="sec-title text-center">
            <p class="sec-title__tagline">Harga Tiket</p>
            <!-- /.sec-title__tagline -->

            <h2 class="sec-title__title">
              Daftar Harga Tiket Tiap Wisata<br />
            </h2>

            <!-- /.sec-title__title -->
          </div>
          <!-- /.sec-title --><!-- /.sec-title -->
          <div class="pricing-page__main-tab-box tabs-box">
            <!-- solution-tab -->
            <div class="tabs-content">
              <!--Marketing Solution-tab-start-->
              <div
                class="tab active-tab fadeInUp animated"
                data-wow-delay="200ms"
                style="display: block"
              >
                <div class="pricing-page__row row">
                  <div
                    class="col-xl-4 col-lg-4 col-md-6 mt-60 wow animated fadeInUp"
                    data-wow-delay="0.1s"
                    data-wow-duration="1500ms"
                  >
                    <div class="pricing-card">
                      <div class="pricing-card__image-wrapper">
                        <div
                          class="pricing-card__image"
                          style="
                            background-image: url('{{ asset('trevlo') }}/assets/images/pricing/lombang.jpeg');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">Pantai Lombang</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Rp. 15.000</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="/detailwisata"
                          class="pricing-card__btn trevlo-btn trevlo-btn--base"
                          ><span>Book Now</span></a
                        >
                      </div>
                      <!-- /.pricing-card__btn-box -->
                      <div class="pricing-card__overlay"></div>
                      <!-- /.pricing-card__overlay -->
                    </div>
                    <!-- /.pricing-card -->
                  </div>
                  <!-- /.col-xl-4 col-lg-4 col-md-6 -->
                   <div
                    class="col-xl-4 col-lg-4 col-md-6 mt-60 wow animated fadeInUp"
                    data-wow-delay="0.1s"
                    data-wow-duration="1500ms"
                  >
                    <div class="pricing-card">
                      <div class="pricing-card__image-wrapper">
                        <div
                          class="pricing-card__image"
                          style="
                            background-image: url('{{ asset('trevlo') }}/assets/images/pricing/slopeng.jpg');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">Pantai Salopeng</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Rp. 10.000</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="tour-listing-details-right.html"
                          class="pricing-card__btn trevlo-btn trevlo-btn--base"
                          ><span>Book Now</span></a
                        >
                      </div>
                      <!-- /.pricing-card__btn-box -->
                      <div class="pricing-card__overlay"></div>
                      <!-- /.pricing-card__overlay -->
                    </div>
                    <!-- /.pricing-card -->
                  </div>
                  <!-- /.col-xl-4 col-lg-4 col-md-6 -->
                   <div
                    class="col-xl-4 col-lg-4 col-md-6 mt-60 wow animated fadeInUp"
                    data-wow-delay="0.1s"
                    data-wow-duration="1500ms"
                  >
                    <div class="pricing-card">
                      <div class="pricing-card__image-wrapper">
                        <div
                          class="pricing-card__image"
                          style="
                            background-image: url('{{ asset('trevlo') }}/assets/images/pricing/gili.jpg');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">Pulau Gili Labak</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Rp. 25.000</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="tour-listing-details-right.html"
                          class="pricing-card__btn trevlo-btn trevlo-btn--base"
                          ><span>Book Now</span></a
                        >
                      </div>
                      <!-- /.pricing-card__btn-box -->
                      <div class="pricing-card__overlay"></div>
                      <!-- /.pricing-card__overlay -->
                    </div>
                    <!-- /.pricing-card -->
                  </div>
                  <!-- /.col-xl-4 col-lg-4 col-md-6 -->
                   <div
                    class="col-xl-4 col-lg-4 col-md-6 mt-60 wow animated fadeInUp"
                    data-wow-delay="0.1s"
                    data-wow-duration="1500ms"
                  >
                    <div class="pricing-card">
                      <div class="pricing-card__image-wrapper">
                        <div
                          class="pricing-card__image"
                          style="
                            background-image: url('{{ asset('trevlo') }}/assets/images/pricing/kashoghi.png');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">Pantai Kasoghi</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Rp. 10.000</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="tour-listing-details-right.html"
                          class="pricing-card__btn trevlo-btn trevlo-btn--base"
                          ><span>Book Now</span></a
                        >
                      </div>
                      <!-- /.pricing-card__btn-box -->
                      <div class="pricing-card__overlay"></div>
                      <!-- /.pricing-card__overlay -->
                    </div>
                    <!-- /.pricing-card -->
                  </div>
                  <!-- /.col-xl-4 col-lg-4 col-md-6 -->
                   <div
                    class="col-xl-4 col-lg-4 col-md-6 mt-60 wow animated fadeInUp"
                    data-wow-delay="0.1s"
                    data-wow-duration="1500ms"
                  >
                    <div class="pricing-card">
                      <div class="pricing-card__image-wrapper">
                        <div
                          class="pricing-card__image"
                          style="
                            background-image: url('{{ asset('trevlo') }}/assets/images/pricing/9.jpeg');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">Pantai Sembilan</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Rp. 10.000</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="tour-listing-details-right.html"
                          class="pricing-card__btn trevlo-btn trevlo-btn--base"
                          ><span>Book Now</span></a
                        >
                      </div>
                      <!-- /.pricing-card__btn-box -->
                      <div class="pricing-card__overlay"></div>
                      <!-- /.pricing-card__overlay -->
                    </div>
                    <!-- /.pricing-card -->
                  </div>
                  <!-- /.col-xl-4 col-lg-4 col-md-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!--Marketing Solution-tab-end-->
              <!--Business Solution-tab-start-->
              <!--Business Solution-tab-end-->
              <!--Business Growth-tab-start-->

              <!--Business Growth-tab-end-->
            </div>
          </div>
          <!-- /.pricing-page__main-tab-box -->
        </div>
        <!-- /.container -->
      </section>
      <!-- Pricing Page End -->

@endsection
