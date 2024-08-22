{{-- @php
    $title = '.. » ..';
@endphp --}}

@extends('layouts.template')

@section('content')
    @if (session('success'))
        <div class="card-body common-flex common-toasts">
            <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                    <div class="d-flex justify-content-between align-items-center alert-light-success">
                        <div class="toast-body">
                            <i class="close-search stroke-success" data-feather="check-square"></i>
                            {{ session('success') }}
                        </div>
                        <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="card-body common-flex common-toasts">
            <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                    <div class="d-flex justify-content-between align-items-center alert-light-danger">
                        <div class="toast-body">
                            <i class="close-search stroke-danger" data-feather="x-circle"></i>
                            {{ session('error') }} <!-- Ubah 'errors' menjadi 'error' -->
                        </div>
                        <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="card-body common-flex common-toasts">
                <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                    <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                        <div class="d-flex justify-content-between align-items-center alert-light-danger">
                            <div class="toast-body">
                                <i class="close-search stroke-danger" data-feather="x-circle"></i>
                                {{ $error }}
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: -0.5rem; margin-left: -1.5rem">
                            <h4>Data Kategori</h4>
                        </div>
                        <div class="col-md-6" style="margin-top: -0.8rem;">
                            <div class="form-group mb-0 me-0"></div>
                            <button style="margin-right: -3rem;" class="btn btn-primary" data-bs-toggle="offcanvas"
                                data-bs-target="#tambah_kategori" aria-controls="offcanvasRight">
                                <i data-feather="plus-square"></i>
                                Tambah Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="margin-top: -3rem">
                <hr>
                <div class="table-responsive theme-scrollbar">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th style="width: 30px;">No</th>
                                <th>Nama Kategori</th>
                                <th>Jumlah Wisata</th>
                                <th style="width: 80px; text-align: center">Action</th>
                            </tr>
                        </thead>
                        @foreach ($kategori as $index => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td>{{ $item->wisatas_count }}</td>
                                    <td>
                                        <ul class="action d-flex justify-content-center align-items-center mb-0">
                                            <li class="edit">
                                                <a data-bs-toggle="offcanvas"
                                                    data-bs-target="#edit_kategori{{ $item->kategori_id }}"
                                                    aria-controls="offcanvasRight">
                                                    <i class="icon-pencil-alt"></i>
                                                </a>
                                            </li>
                                            <li class="delete">
                                                <a class="hapus_kategori" data-id="{{ $item->kategori_id }}"
                                                    data-nama="{{ $item->nama_kategori }}">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>

                            <div class="common-flex common-offcanvas">
                                <div class="offcanvas offcanvas-end" id="edit_kategori{{ $item->kategori_id }}"
                                    tabindex="-1" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h4 class="offcanvas-title" id="offcanvasRightLabel">Form Tambah Kategori</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body custom-scrollbar">
                                        <form class="row g-3" action="/kategori/{{ $item->kategori_id }}/edit"
                                            method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <label class="form-label" for="exampleFormControlInput6">Nama
                                                    Kategori</label>
                                                <input name="nama_kategori" class="form-control mb-3"
                                                    id="exampleFormControlInput6" type="text"
                                                    placeholder="Maasukkan Nama Kategori"
                                                    value="{{ $item->nama_kategori }}">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-light me-2" type="submit"
                                                    data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body common-flex common-offcanvas">
        <div class="offcanvas offcanvas-end" id="tambah_kategori" tabindex="-1" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasRightLabel">Form Tambah Kategori</h4>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body custom-scrollbar">
                <form class="row g-3" action="" method="POST">
                    @csrf
                    <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput6">Nama Kategori</label>
                        <input name="nama_kategori" class="form-control" id="exampleFormControlInput6" type="text"
                            placeholder="Maasukkan Nama Kategori">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas"
                            aria-label="Close">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelectorAll('.hapus_kategori').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link

                var id = this.getAttribute('data-id');
                var nama = this.getAttribute('data-nama');
                var url = "/kategori/" + id + "/hapus"; // Sesuaikan dengan route

                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Ingin menghapus Kategori '" + nama + "'?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Tidak, Batal!",
                    reverseButtons: true
                }).then(function(result) {
                    if (result.value) {
                        // Mengarahkan ke URL penghapusan
                        window.location.href = url;
                    } else if (result.dismiss === "cancel") {
                        Swal.fire(
                            "Batal",
                            "Anda Membatalkan Penghapusan",
                            "error"
                        );
                    }
                });
            });
        });
    </script>
@endsection
