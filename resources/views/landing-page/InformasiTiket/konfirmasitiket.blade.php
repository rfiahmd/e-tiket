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
            <div class="card-header">
              <h2>Pantai Lombang</h2>
            </div>
            <div class="card-body">
              <h3 class="mb-4">Ringkasan Pembelian</h3>
              <div class="ticket">
                <p>Tiket Orang Masuk Ancol</p>
                <span>15 Agt '24, 05:00-23:00 WIB</span>
                <div class="price-quantity">
                  <span>Rp. 30.000</span>
                  <div class="quantity">
                    <button class="minus">-</button>
                    <input type="number" value="2" min="1" />
                    <button class="plus">+</button>
                  </div>
                </div>
              </div>
              <hr />
              <div class="ticket">
                <p>Tiket Kendaraan Mobil</p>
                <span>15 Agt '24, 05:00-23:00 WIB</span>
                <div class="price-quantity">
                  <span>Rp. 35.000</span>
                  <div class="quantity">
                    <button class="minus">-</button>
                    <input type="number" value="5" min="1" />
                    <button class="plus">+</button>
                  </div>
                </div>
              </div>
              <hr />
              <a href="#">Ingin menambahkan tiket lainnya? Tekan Disini</a>
              <hr />
              <div class="total">
                <p class="mt-3">Total (7 tiket)</p>
                <span>IDR 235.000</span>
              </div>
              <hr />
              <h3>Informasi Pembeli</h3>
              <form class="order-form">
                <label for="tanggal">Tanggal Pesanan:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required />

                <label for="name">Nama Pemesan:</label>
                <input type="text" id="name" name="name" required />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />

                <label for="phone">Nomor Telepon:</label>
                <input
                  type="text"
                  inputmode="numeric"
                  id="phone"
                  name="phone"
                  required
                />

                <label>
                  <input type="checkbox" name="agreement" required />
                  Saya setuju dengan syarat dan ketentuan
                </label>

                <button
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  Pesan Sekarang
                </button>
                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          Konfirmasi
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <p class="text-black">Tanggal Yang Anda Pilih adalah, 15 Agustus 2024</p>
                        <p class="text-black">Tiket anda akan dikirim ke septiabudiws@gmail.com dan 085335255308. Apakah anda yakin untuk melanjutkan?</p>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Kembali
                        </button>
                        <button type="button" class="btn btn-primary">
                          Lanjutkan
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </section>
      <!-- Pricing Page End -->

@endsection
