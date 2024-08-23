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
                  @foreach ( $wisata as $item)
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
                            background-image: url('{{ asset('pictures/wisata/'. $item->gambar_wisata) }}');
                          "
                        ></div>
                        <!-- /.pricing-card__image-inner-content -->
                      </div>
                      <!-- /.pricing-card__image-bg -->
                      <ul class="pricing-card__list">
                        <li>
                          <p class="bjir text-center">{{ $item->nama_wisata }}</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>{{ $item-> }}</p>
                        </li>
                        <li>
                          <span class='bx bxs-chevron-right'></span>
                          <p>Buka Hari Ini</p>
                        </li>
                      </ul>
                      <!-- /.pricing-card__list -->
                      <div class="pricing-card__btn-box">
                        <a
                          href="/detail/{{ $item->wisata_id }}"
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

                  @endforeach
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>
          <!-- /.pricing-page__main-tab-box -->
        </div>
        <!-- /.container -->
      </section>
      <!-- Pricing Page End -->

@endsection
