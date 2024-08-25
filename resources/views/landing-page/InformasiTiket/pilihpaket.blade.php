@extends('landing-page.layout.template')

@section('content')
    <!-- Pricing Page Start -->
    <section class="pricing-page section-space">
        <div class="wrapper-paket">
            <div class="sec-title text-center">
                <p class="sec-title__tagline">Harga Paket</p>
                <!-- /.sec-title__tagline -->

                <h2 class="sec-title__title">Daftar Paket Nama Wisata<br /></h2>

                <!-- /.sec-title__title -->
            </div>
            <div class="card">
                <form action="{{ route('step2', $wisata->wisata_id) }}" method="GET">
                    @csrf
                    <h2>Pilihan Paket untuk {{ $wisata->nama_wisata }}</h2>
                    @foreach ($paket as $item)
                        <div class="card mt-4">
                            <div class="card-header">
                                <h2>{{ $item->nama_paket }}</h2>
                            </div>
                            <div class="card-body">
                                <div class="ticket-type">
                                    <div class="ticket-info">
                                        <p>Syarat & ketentuan</p>
                                        <div class="more">
                                            <p>{!! $item->deskripsi !!}</p>
                                        </div>
                                        <button type="button" class="read-more-btn">
                                            Read More
                                        </button><br />
                                        <span>{{ \Carbon\Carbon::parse($wisata->waktu_buka)->format('H:i') }} - {{ \Carbon\Carbon::parse($wisata->waktu_tutup)->format('H:i') }}</span>
                                    </div>
                                    <div class="card-footer">
                                        <h3 class="total">Rp. <span id="harga">{{ number_format($item->harga_paket, 0, ',', '.') }}</span></h3>
                                        <button class="buy-button" id="buy-button">
                                            Beli Tiket
                                        </button>
                                        <div class="counter-container" id="counter-container">
                                            <button type="button" class="counter-button" id="decrease">-</button>
                                            <input type="number" class="ticket-count" name="tiket_count[]" id="ticket-count" value="0" min="0" readonly />
                                            <button type="button" class="counter-button" id="increase">+</button>
                                            <input type="hidden" name="id_pkt[]" value="{{ $item->paket_id }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </form>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- Pricing Page End -->
@endsection
