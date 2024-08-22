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

    @if (session('errors'))
        <div class="card-body common-flex common-toasts">
            <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                    <div class="d-flex justify-content-between align-items-center alert-light-danger">
                        <div class="toast-body">
                            <i class="close-search stroke-danger" data-feather="x-circle"></i>
                            {{ session('errors') }}
                        </div>
                        <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="d-flex gap-2 py-3">
                        <div class="" style="margin-top: -0.5rem;">
                            <h4>Data Paket Wisata</h4>
                        </div>
                        <div class="ms-auto" style="margin-top: -0.8rem;">
                            @if (auth()->user()->role === 'Super Admin')
                                {{-- <div class="btn-group">
                                <select class="form-select" id="wisataFilter" aria-label="Default select example">
                                    <option value="all" {{ request('wisata_filter') == 'all' ? 'selected' : '' }}>Semua
                                    </option>
                                    @foreach ($wisata as $item)
                                        <option value="{{ $item->wisata_id }}"
                                            {{ request('wisata_filter') == $item->wisata_id ? 'selected' : '' }}>
                                            {{ $item->nama_wisata }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}
                                <div class="btn-group">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ request('wisata_filter') ? $wisata->firstWhere('wisata_id', request('wisata_filter'))->nama_wisata : 'Semua' }}
                                    </button>
                                    <ul class="dropdown-menu dropdown-block">
                                        <li>
                                            <a class="dropdown-item" href="{{ url()->current() }}">Semua</a>
                                        </li>
                                        @foreach ($wisata as $item)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url()->current() }}?wisata_filter={{ $item->wisata_id }}">
                                                    {{ $item->nama_wisata }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="" style="margin-top: -0.8rem;">
                            <div class="form-group mb-0 me-0"></div>
                            <a style="" class="btn btn-primary" href="paket_tambah">
                                <i data-feather="plus-square"></i>
                                Tambah Data
                            </a>
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
                                <th>Tempat Wisata</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th style="width: 80px; text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paketWisata as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <strong style="font-size: 16px;">{{ $item->wisata->nama_wisata }}</strong>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5>{{ $item->nama_paket }}</h5>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#datail-modal{{ $item->paket_id }}">
                                                    <span style="font-size: 12px;">Lihat selengkapnya ...</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp. {{ number_format($item->harga_paket, 2, ',', '.') }}</td>
                                    <td>
                                        <ul class="action d-flex justify-content-center align-items-center mb-0">
                                            <li class="edit"> <a
                                                    href="{{ route('paket_edit', ['id' => $item->paket_id]) }}"><i
                                                        class="icon-pencil-alt"></i></a></li>
                                            <li class="delete">
                                                <a class="hapus_paket" data-id="{{ $item->paket_id }}"
                                                    data-nama="{{ $item->nama_paket }}">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                {{-- Modal Detail --}}
                                <div class="modal fade" id="datail-modal{{ $item->paket_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="grid-modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Paket</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5><strong>Wisata {{ $item->wisata->nama_wisata }}</strong></h5>
                                                <div class="mt-3">
                                                    <div class="row mb-2">
                                                        <div class="col-2"><strong>Paket</strong></div>
                                                        <div class="col-1">:</div>
                                                        <div class="col-8" style="margin-left: -15px">
                                                            {{ $item->nama_paket }}</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-2"><strong>Harga</strong></div>
                                                        <div class="col-1">:</div>
                                                        <div class="col-8" style="margin-left: -15px">Rp.
                                                            {{ number_format($item->harga_paket, 2, ',', '.') }}</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-2"><strong>Deskripsi</strong></div>
                                                        <div class="col-1">:</div>
                                                        <div class="col-9" style="margin-left: -15px">
                                                            <p style="margin-top: -14px">{!! $item->deskripsi !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.querySelectorAll('.hapus_paket').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link

                var id = this.getAttribute('data-id');
                var nama = this.getAttribute('data-nama');
                var url = "/paket/" + id + "/hapus"; // Sesuaikan dengan route

                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Ingin menghapus Paket '" + nama + "'?",
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

    <script>
        document.getElementById('wisataFilter').addEventListener('change', function() {
            const selectedValue = this.value;
            const url = new URL(window.location.href);
            url.searchParams.set('wisata_filter', selectedValue);
            window.location.href = url.toString();
        });
    </script>
@endsection
