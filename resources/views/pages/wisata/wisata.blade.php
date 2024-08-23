@php
    if (auth()->user()->role === 'Super Admin') {
        $title = 'Data Wisata';
        $titleHeader = '<li><strong style="margin: 0 8px;">/</strong>Data Wisata </li>';
    } elseif (auth()->user()->role === 'Admin') {
        $title = 'Profil Wisata';
        $titleHeader = '<li><strong style="margin: 0 8px;">/</strong>Profil Wisata </li>';
    }
@endphp

@extends('layouts.template')

@section('content')

    @if (session('success'))
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
    @endif

    @if (session('errors'))
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
    @endif

    @if (auth()->user()->role === 'Super Admin')
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 project-list">
                        <div class="row">
                            <div class="col-md-6" style="margin-top: -0.5rem; margin-left: -1.5rem">
                                <h4>Data Wisata</h4>
                            </div>
                            <div class="col-md-6" style="margin-top: -0.8rem;">
                                <div class="form-group mb-0 me-0"></div>
                                <a style="margin-right: -3rem;" class="btn btn-primary" href="{{ route('wisata_tambah') }}">
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
                                    <th>Nama Wisata</th>
                                    <th>Kategori</th>
                                    <th>Jadwal</th>
                                    <th style="width: 70px; text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wisata as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}.</td>
                                        <td>{{ $item->nama_wisata }}</td>
                                        <td>{{ $item->kategori->nama_kategori }}</td>
                                        <td>
                                            {{ $item->waktu_buka ? \Carbon\Carbon::parse($item->waktu_buka)->format('H:i') : '-' }}
                                            <strong> s/d </strong>
                                            {{ $item->waktu_tutup ? \Carbon\Carbon::parse($item->waktu_tutup)->format('H:i') : '-' }}
                                        </td>
                                        <td>
                                            <ul class="action d-flex justify-content-center align-items-center mb-0">
                                                <li class="search" style="margin-right: 7px"><a href="#"><i
                                                            class="icon-search"></i></a></li>
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->role === 'Admin')
        <div class="container-fluid">
            <div class="user-profile">
                <div class="row">
                    <!-- user profile first-style start-->
                    <div class="col-sm-12">
                        <div class="card hovercard text-center">
                            <!-- Ambil gambar wisata dari tabel wisata -->
                            <img src="{{ asset('pictures/wisata/' . ($adminProfile->wisata->gambar_wisata ?? 'default.png')) }}"
                                alt="" style="width: auto; height: 500px; object-fit: cover;">
                            <div class="info">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6><i class="fa fa-envelope"></i> Email Admin</h6>
                                                    <span class="text-truncate w-100">{{ auth()->user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6><i class="fa fa-calendar"></i> Waktu Operasi</h6>
                                                    <span>
                                                        {{ $adminProfile->wisata->waktu_buka ? \Carbon\Carbon::parse($adminProfile->wisata->waktu_buka)->format('H:i') : '-' }}
                                                        -
                                                        {{ $adminProfile->wisata->waktu_tutup ? \Carbon\Carbon::parse($adminProfile->wisata->waktu_tutup)->format('H:i') : '-' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1 mb-1">
                                        <div class="user-designation">
                                            <div class="title"><strong>Wisata
                                                    {{ $adminProfile->wisata->nama_wisata ?? '-' }}</strong></div>
                                            <div class="desc">
                                                {{ $adminProfile->wisata->kategori->nama_kategori ?? '-' }}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6><i class="fa fa-phone"></i> Kontak Admin</h6>
                                                    <span>{{ $adminProfile->notelp_admin ?? '-' }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6><i class="fa fa-location-arrow"></i> Alamat</h6>
                                                    <span>{{ $adminProfile->wisata->alamat_lengkap ?? '-' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top: -20px; margin-bottom: -15px"><br>
                            <div class="p-3" style="margin-top: -50px;">
                                <div class="d-flex gap-3 py-4">
                                    <div class="p-3 flex-fill" style="padding: 10px;">
                                        <span class="d-block mb-2"><strong>Deskripsi</strong></span>
                                        <div class="text-start">
                                            {!! $adminProfile->wisata->deskripsi ?? '-' !!}
                                        </div>
                                    </div>
                                    <div class="p-3 flex-fill" style="padding: 10px;">
                                        <span class="d-block mb-2"><strong>Fasilitas</strong></span>
                                        <div class="text-start">
                                            {!! $adminProfile->wisata->fasilitas ?? '-' !!}
                                        </div>
                                    </div>
                                    <div class="p-3 flex-fill" style="padding: 10px;">
                                        <span class="d-block mb-2"><strong>Syarat & Ketentuan</strong></span>
                                        <div class="text-start">
                                            {!! $adminProfile->wisata->syarat_ketentuan ?? '-' !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
