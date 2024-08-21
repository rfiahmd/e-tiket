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

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="d-flex gap-2 py-3">
                        <div class="" style="margin-top: -0.5rem;">
                            <h4>Data Paket Wisata</h4>
                        </div>
                        <div class="ms-auto" style="margin-top: -0.8rem;">
                            <div class="btn-group">
                                {{-- Filter --}}
                                <select class="form-select" id="wisataFilter" aria-label="Default select example">
                                    <option value="all" {{ request('wisata_filter') == 'all' ? 'selected' : '' }}>Semua</option>
                                    @foreach ($wisata as $item)
                                        <option value="{{ $item->wisata_id }}"
                                            {{ request('wisata_filter') == $item->wisata_id ? 'selected' : '' }}>
                                            {{ $item->nama_wisata }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
                                            <div style="margin-left: 10px" class="flex-grow-1">
                                                <h5>{{ $item->nama_paket }}</h5>
                                                <a href="product.html">
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
@endsection

@section('script')
<script>
    document.getElementById('wisataFilter').addEventListener('change', function() {
        const selectedValue = this.value;
        const url = new URL(window.location.href);
        url.searchParams.set('wisata_filter', selectedValue);
        window.location.href = url.toString();
    });
</script>
@endsection
