@extends('landing-page.layout.template')

@section('content')

        <!-- Contact Page Start -->
        <section class="contact-page section-space-top mb-120">
            <div class="container">
                <div class="sec-title text-center">

                    <p class="sec-title__tagline">Cek Tiket</p><!-- /.sec-title__tagline -->

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
                            <a class="btn form-one__btn trevlo-btn trevlo-btn--base" href="/detailtiket "><span>Cek Tiket</span></a>
                        </div><!-- /.form-one__btn-box -->
                    </div><!-- /.col-12-->
                </form><!-- /.row -->
        </section>
        <!-- Contact Page End -->

@endsection
