<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('') }}assets/Admin-Mofi/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('') }}assets/Admin-Mofi/assets/images/favicon.png" type="image/x-icon">
    <title>Register | Mofi - Premium Admin Template By Pixelstrap</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('') }}assets/Admin-Mofi/assets/css/color-1.css"
        media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/responsive.css">

    <style>
        .ck-editor__editable_inline {
            height: 200px;
            width: 800px
        }
    </style>

</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light"
                                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo.png"
                                    alt="looginpage"><img class="img-fluid for-dark"
                                    src="{{ asset('') }}assets/Admin-Mofi/assets/images/logo/logo_dark.png"
                                    alt="looginpage"></a></div>
                        <div class="notiv">
                            <h4 style="margin-left: 15px">Create your account</h4>
                            <p style="margin-left: 15px">Enter your personal details to create account</p>
                            @if ($errors->any())
                                <div class="alert alert-light-danger" style="width: 850px; margin-left: 10px; border-radius: 15px" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <div class="txt-danger">
                                                <li style="margin-left: 30px">
                                                    <i class="icofont icofont-arrow-right"></i>{{ $error }}
                                                </li>
                                            </div>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="container-fluid">
                            <div class="card height-equal">
                                <div class="card-body custom-input">

                                    <form class="form-wizard" id="regForm" novalidate enctype="multipart/form-data"
                                        action="" method="POST">
                                        @csrf
                                        <div class="tab" style="width: 800px">
                                            <div class="card-header" style="margin-top: -16px">
                                                <h4>Form Admin Wisata</h4>
                                                <p class="f-m-light mt-1">
                                                    Lengkapi setiap formnya dan baru bisa lanjut.</p>
                                            </div>
                                            <br>
                                            <div class="row g-3">
                                                <div class="row g-3 avatar-upload">
                                                    <div class="col-12">
                                                        <div>
                                                            <div class="avatar-edit">
                                                                <input name="profile" id="imageUpload" type="file"
                                                                    accept=".png, .jpg, .jpeg">
                                                                <label for="imageUpload"></label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="image"></div>
                                                            </div>
                                                        </div>
                                                        <h6>Add Profile<span class="txt-danger">*</span></h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="name">Nama<span
                                                            class="txt-danger">*</span></label>
                                                    <input name="name" class="form-control" type="text"
                                                        required="" placeholder="First name"
                                                        value="{{ old('name') }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="student-email-wizard">
                                                        Email
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <input name="email" class="form-control" type="email"
                                                        required="" placeholder="Test@gmail.com"
                                                        value="{{ old('email') }}">
                                                </div>
                                                <div class="col-12">
                                                    <style>
                                                        .form-input {
                                                            position: relative;
                                                        }

                                                        .form-input .form-control {
                                                            padding-right: 40px;
                                                        }

                                                        .show-hide {
                                                            position: absolute;
                                                            top: 50%;
                                                            right: 10px;
                                                            transform: translateY(-50%);
                                                            cursor: pointer;
                                                        }
                                                    </style>
                                                    {{-- <label class="col-sm-12 form-label"
                                                        for="password-wizard">Password<span
                                                            class="txt-danger">*</span></label>
                                                    <input class="form-control" type="password" name="password"
                                                        required="" placeholder="Enter password"> --}}
                                                    <label class="col-form-label">Password</label>
                                                    <div class="form-input position-relative">
                                                        <input class="form-control" type="password" name="password"
                                                            required="" placeholder="*********">
                                                        <div class="show-hide"><span class="show"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab" style="width: 800px">
                                            <div class="card-header" style="margin-top: -16px">
                                                <h4>Form Wisata</h4>
                                                <p class="f-m-light mt-1">
                                                    Lengkapi setiap formnya dan baru bisa lanjut.</p>
                                            </div>
                                            <br>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="twitterControlInput">
                                                        Nama Wisata
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <input class="form-control" id="twitterControlInput"
                                                        type="text" name="nama_wisata"
                                                        placeholder="Masukkan Nama Wisata...">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="twitterControlInput">
                                                        Kategori
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <select class="form-select" name="kategori"
                                                        aria-label="Default select example">
                                                        <option disabled selected>Pilih Kategori ...</option>
                                                        @foreach ($kategori as $item)
                                                            <option value="{{ $item->kategori_id }}">
                                                                {{ $item->nama_kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="twitterControlInput">
                                                        Gambar Wisata
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <input class="form-control" name="gambar_wisata" id="formFile"
                                                        type="file">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Alamat Lengkap
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <input class="form-control"
                                                        type="text" name="alamat"
                                                        placeholder="Masukkan Alamat lengkap...">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Deskripsi
                                                        <span class="txt-danger">*</span>
                                                    </label>
                                                    <textarea id="editor" name="deskripsi" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-end pt-3">
                                                <button class="btn btn-secondary" id="prevBtn" type="button"
                                                    onclick="nextPrev(-1)">Sebelumnya</button>
                                                <button class="btn btn-primary" id="nextBtn" type="button"
                                                    onclick="nextPrev(1)">Berikutnya</button>
                                                <!-- Hidden Submit Button -->
                                                <button class="btn btn-primary" id="submitBtn" type="submit"
                                                    style="display: none;">Kirim</button>
                                            </div>
                                        </div>
                                        <!-- Circles which indicates the steps of the form:-->
                                        <div class="text-center">
                                            <span class="step"></span>
                                            <span class="step"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder: {
                        uploadUrl: "{{ route('ckeditor.uploadreg', ['_token' => csrf_token()]) }}"
                    }
                })
                .catch(error => {
                    console.error(error);
                });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <!-- latest jquery-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- calendar js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/form-wizard/form-wizard.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/form-wizard/image-upload.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/height-equal.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script1.js"></script>
        <!-- Plugin used-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/scrollbar/simplebar.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/scrollbar/custom.js"></script>
        <!-- Sidebar jquery-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/sidebar-menu.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/sidebar-pin.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/slick/slick.min.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/slick/slick.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/header-slick.js"></script>
        <!-- calendar js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/form-wizard/form-wizard.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/form-wizard/image-upload.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/height-equal.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script.js"></script>
        <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script1.js"></script>
    </div>
</body>

</html>
