@extends('landing-page.layout.template')

@section('content')

        <!-- Contact Page Start -->
        <section class="contact-page section-space-top mb-120">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Cek Tiket</p><!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title">TIKET ANDA</h2><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->

                <form action="https://www.bracketweb.com/trevlo-html/assets/inc/sendemail.php" class="contact-page__form form-one row gutter-20 contact-form-validated">
                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <button disabled type="button" id="status" class="form-one__btn form-one__input">TERPAKAI</button>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="wisata" class="form-label">Nama Wisata</label>
                            <input type="text" value="{{ $wisata }}" name="wisata" id="wisata" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="kode" class="form-label">Kode Tiket</label>
                            <input type="text" value="{{ $kode }}" name="kode" id="kode" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div>

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="nama" class="form-label">Atas Nama</label>
                            <input type="text" value="{{ $nama }}" name="nama" id="nama" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ $email }}" name="email" id="email" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.8s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="hp" class="form-label">No. HP</label>
                            <input type="text" value="{{ $phone }}" name="hp" id="hp" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="1.3s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="tiket" class="form-label">Jumlah Tiket</label>
                            <input type="text" value="{{ $jumlah_paket }}" name="tiket" id="tiket" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                          <label for="harga" class="form-label">Total Harga</label>
                            <input type="text" value="Rp. {{ number_format($total_harga, 0, ',', '.') }}" name="harga" id="harga" class="form-one__input" readonly>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->

                    <div class="col-12 wow animated fadeInUp" data-wow-delay="1.1s" data-wow-duration="1500ms">
                        <div class="form-one__btn-box">
                            <a class="form-one__btn trevlo-btn trevlo-btn--base" href="{{ url()->previous() }}"><span>Kembali</span></a>
                            <button type="submit" class="form-one__btn trevlo-btn trevlo-btn--base"><span>Download</span></button>
                        </div><!-- /.form-one__btn-box -->
                    </div><!-- /.col-12-->
                </form><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Contact Page End -->
@endsection
