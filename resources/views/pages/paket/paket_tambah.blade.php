{{-- @php
    $title = '.. » ..';
@endphp --}}

@extends('layouts.template')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: -0.5rem; margin-left: -1.5rem">
                            <h4>Form Tambah Paket</h4>
                        </div>
                        <div class="col-md-6" style="margin-top: -0.8rem;">
                            <div class="form-group mb-0 me-0"></div>
                            <a style="margin-right: -3rem;" class="btn btn-secondary" href="{{ route('paket_wisata') }}">
                                <i class="fa fa-reorder"></i>
                                Data Paket
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="margin-top: -3rem">
                <hr>

                <form class="row g-3 needs-validation custom-input" novalidate="" action="" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-6">
                        <label class="form-label" for="validationCustom01">Nama Paket<span
                                class="txt-danger">*</span></label>
                        <input class="form-control" name="nama_paket" id="validationCustom01" type="text"
                            placeholder="Masukkan Nama Paket..." required="">
                        <div class="invalid-feedback">Please enter your valid </div>
                        <div class="valid-feedback">
                            Looks's Good!</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="validationCustom04">Wisata<span class="txt-danger">*</span></label>
                        @if (auth()->user()->role === 'Super Admin')
                            <select class="form-select" name="wisata" id="validationCustom04" required="">
                                <option selected="" disabled="" value="">Pilih Wisata...</option>
                                @foreach ($wisata as $item)
                                    <option value="{{ $item->wisata_id }}">{{ $item->nama_wisata }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid state.</div>
                            <div class="valid-feedback">Looks good!</div>
                        @endif

                        @if (auth()->user()->role === 'Admin')
                            @php
                                // Ambil admin profile yang terkait dengan user yang sedang login
                                $adminProfile = \App\Models\AdminProfile::where('id_user', auth()->user()->id)->first();

                                // Ambil wisata yang terkait dengan wisata_id di admin profile
                                $adminWisata = $adminProfile
                                    ? \App\Models\Wisata::find($adminProfile->id_wisata)
                                    : null;
                            @endphp

                            @if ($adminWisata)
                                <input type="hidden" name="wisata" value="{{ $adminWisata->wisata_id }}">
                                <input class="form-control" type="text" value="{{ $adminWisata->nama_wisata }}" readonly
                                    style="pointer-events: none;">
                            @else
                                <input class="form-control" type="text" value="Wisata tidak ditemukan" readonly
                                    style="pointer-events: none;">
                            @endif
                        @endif

                    </div>

                    <div class="col-12">
                        <label class="form-label" for="hargaPaket">Harga Paket<span class="txt-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input type="text" class="form-control" name="harga" id="hargaPaket" inputmode="numeric"
                                placeholder="Masukkan Harga Paket..." required>
                        </div>
                        <div class="invalid-feedback">Please enter your valid price.</div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="validationCustom04">Deskripsi<span
                                class="txt-danger">*</span></label>
                        <textarea id="editor" name="deskripsi" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.uploadpkt', ['_token' => csrf_token()]) }}"
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
@endsection
