@extends('layout.template')

@section('content')

        <!-- Contact Page Start -->
        <section class="contact-page section-space-top mb-120">
            <div class="container">
                <div class="sec-title text-center">

                    <p class="sec-title__tagline">Pembatalan Tiket</p><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">Masukkan Kode Tiket Yang Anda Punya</h2><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <!-- /.sec-title -->
                <form action="https://www.bracketweb.com/trevlo-html/assets/inc/sendemail.php" class="contact-page__form form-one row gutter-20 contact-form-validated">
                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <input type="text" name="subject" id="form-one-subject-input" placeholder="Masukkan Kode Tiket" class="form-one__input">
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->
                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="form-one__btn-box">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-one__btn trevlo-btn trevlo-btn--base"><span>Selanjutnya</span></button>
                        </div><!-- /.form-one__btn-box -->
                    </div><!-- /.col-12-->
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
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Informasi</h5>
                            <p class="card-text mb-0"><strong>Satus:</strong> Belum Terpakai</p>
                            <p class="card-text mb-0"><strong>Kode Tiket:</strong> afnJB7vdwb</p>
                            <p class="card-text mb-0"><strong>Nama:</strong> Rofi</p>
                            <p class="card-text mb-0"><strong>Email:</strong> Rofi@gmail.com</p>
                            <p class="card-text mb-0"><strong>Jumlah Tiket:</strong> 16</p>
                            <p class="card-text mb-0"><strong>Total Harga:</strong> Rp. 100.000</p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-dismiss="modal"
                        >
                          Kembali
                        </button>
                        <button type="button" class="btn btn-danger">
                          Lanjutkan
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                </form><!-- /.row -->
        </section>
        <!-- Contact Page End -->

@endsection
