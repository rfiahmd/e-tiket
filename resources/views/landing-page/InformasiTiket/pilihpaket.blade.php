@extends('landing-page.layout.template')

@section('content')

      <!-- Pricing Page Start -->
      <section class="pricing-page section-space">
        <div class="wrapper-paket">
          <div class="sec-title text-center">
            <p class="sec-title__tagline">Harga Paket</p>
            <!-- /.sec-title__tagline -->

            <h2 class="sec-title__title">Daftar Paket Nama Wisata<br /></h2>

            <!-- /.sec-title__title -->
          </div>
          <div class="card">
            <h2>Pilihan Paket Nama Tempat Wisata</h2>
            <div class="card mt-4">
              <div class="card-header">
                <h2>Tiket Masuk</h2>
              </div>
              <div class="card-body">
                <div class="ticket-type">
                  <h3>Tiket untuk Rabu, 14 Agustus 2024:</h3>
                  <div class="ticket-info">
                    <p>Syarat & ketentuan</p>
                    <p class="more">
                      1. Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <p class="more">
                      2. Lorem ipsum dolor sit amet consectetur, adipisicing
                      elit. Delectus.
                    </p>
                    <p class="more">
                      3. Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Officia voluptatem porro cupiditate possimus?
                    </p>
                    <button class="read-more-btn" id="read-more-btn">
                      Read More</button
                    ><br />
                    <span>14 Agt '24, 05:00-23:00 WIB</span>
                  </div>
                  <div class="card-footer">
                    <h3 class="total">Rp. 10.000</h3>
                    <button class="buy-button" id="buy-button">
                      Beli Tiket
                    </button>
                    <div class="counter-container" id="counter-container">
                      <button class="counter-button" id="decrease">-</button>
                      <input
                        type="number"
                        id="ticket-count"
                        value="0"
                        min="0"
                      />
                      <button class="counter-button" id="increase">+</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-header">
                <h2>Paket Parkir</h2>
              </div>
              <div class="card-body">
                <div class="ticket-type">
                  <h3>Tiket untuk Rabu, 14 Agustus 2024:</h3>
                  <div class="ticket-info">
                    <p>Syarat & ketentuan</p>
                    <p class="more">
                      1. Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <p class="more">
                      2. Lorem ipsum dolor sit amet consectetur, adipisicing
                      elit. Delectus.
                    </p>
                    <p class="more">
                      3. Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Officia voluptatem porro cupiditate possimus?
                    </p>
                    <button class="read-more-btn" id="read-more-btn">
                      Read More</button
                    ><br />
                    <span>14 Agt '24, 05:00-23:00 WIB</span>
                  </div>
                  <div class="card-footer">
                    <h3 class="total">Rp. 10.000</h3>
                    <button class="buy-button" id="buy-button">
                      Beli Tiket
                    </button>
                    <div class="counter-container" id="counter-container">
                      <button class="counter-button" id="decrease">-</button>
                      <input
                        type="number"
                        id="ticket-count"
                        value="0"
                        min="0"
                      />
                      <button class="counter-button" id="increase">+</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="total_pembayaran d-flex">
              <h3 class="mt-2">Total Rp. 0</h3>
              <a href="/konfirmasi" class="buy-button ms-lg-auto"
                >Selanjutnya</a>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </section>
      <!-- Pricing Page End -->

@endsection
