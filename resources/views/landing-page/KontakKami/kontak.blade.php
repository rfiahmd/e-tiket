@extends('landing-page.layout.template')

@section('content')

        <!-- Contact Page Start -->
        <section class="contact-page section-space-top">
            <div class="container">
                <div class="sec-title text-center">

                    <p class="sec-title__tagline">Hubungi Kami</p><!-- /.sec-title__tagline -->

                    <h2 class="sec-title__title">Kirim Feed Back</h2><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <!-- /.sec-title -->
                <form action="https://www.bracketweb.com/trevlo-html/assets/inc/sendemail.php" class="contact-page__form form-one row gutter-20 contact-form-validated">
                    <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <input type="text" name="name" id="form-one-name-input" placeholder="Masukkan Nama" class="form-one__input">
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <input type="email" name="email" id="form-one-email-input" placeholder="Alamat Email" class="form-one__input">
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <input type="tel" name="phone" id="form-one-phone-input" placeholder="Masukkan Nomer HP" class="form-one__input">
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <input type="text" name="subject" id="form-one-subject-input" placeholder="Subject" class="form-one__input">
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <textarea name="message" id="form-one-message-input" cols="30" rows="10" placeholder="Tulis Pesan" class="form-one__message form-one__input"></textarea>
                        </div><!-- /.form-one__group -->
                    </div><!-- /.col-12-->
                    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="form-one__btn-box">
                            <button type="submit" class="form-one__btn trevlo-btn trevlo-btn--base"><span>Send
                                    Message</span></button>
                        </div><!-- /.form-one__btn-box -->
                    </div><!-- /.col-12-->
                </form><!-- /.row -->
                <div class="result"></div><!-- /.result -->
            </div><!-- /.container -->
            <div class="contact-page__info">
                <div class="contact-page__info-container container">
                    <div class="contact-page__info-top">
                        <p class="contact-page__info-top-title">Informasi Kontak</p>
                    </div><!-- /.contact-page__info-top -->
                    <div class="contact-page__info-row row">
                        <div class="col-lg-4 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                            <div class="contact-page__info-box">
                                <div class="contact-page__info-icon-box">
                                    <span class="icon-phone-1"></span>
                                </div>
                                <div class="contact-page__info-text-box">
                                    <p class="contact-page__info-title">Punya Pertanyaan?</p>
                                    <a href="tel:23(000)-8050">
                                        <h4 class="contact-page__info-text contact-page__info-text-link">+6285335255308
                                        </h4>
                                    </a>
                                </div>
                            </div><!-- /.contact-page__info-box -->
                        </div>

                        <div class="col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <div class="contact-page__info-box">
                                <div class="contact-page__info-icon-box">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="contact-page__info-text-box">
                                    <p class="contact-page__info-title">Kirim Email</p>
                                    <a href="mailto:help@trevlo.com">
                                        <h4 class="contact-page__info-text contact-page__info-text-link">septiabudiws@gmail.com</h4>
                                    </a>
                                </div>
                            </div><!-- /.contact-page__info-box -->
                        </div>
                        <div class="col-lg-4 wow animated fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                            <div class="contact-page__info-box contact-page__info-box--three">
                                <div class="contact-page__info-icon-box">
                                    <span class="icon-location-1"></span>
                                </div>
                                <div class="contact-page__info-text-box">
                                    <p class="contact-page__info-title">Alamat</p>
                                    <h4 class="contact-page__info-text">Jl. Raya Gapura Bangkal</h4>
                                </div>
                            </div><!-- /.contact-page__info-box -->
                        </div>
                    <!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.contact-page__info -->
            </div>
            <div class="google-map google-map__@@extraClassName">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0147535260417!2d113.84186247507932!3d-7.007545192993828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e797e29e7493%3A0x3d2b3e4ec086a13d!2sUniversitas%20Bahaudin%20Mudhary%20Madura%20(UNIBA%20Madura)!5e0!3m2!1sid!2sid!4v1723121411187!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- /.google-map -->
        </section>
        <!-- Contact Page End -->

@endsection
