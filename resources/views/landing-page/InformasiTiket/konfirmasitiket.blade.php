@extends('landing-page.layout.template')

@section('content')
    <!-- Konfirmasi Start -->
    <section class="pricing-page section-space">
        <div class="wrapper-paket">
            <div class="sec-title text-center">
                <p class="sec-title__tagline">Konfirmasi Pemesanan</p>
                <h2 class="sec-title__title">Konfirmasi Pesanan Anda</h2>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>{{ $wisata->nama_wisata }}</h2>
                </div>
                <div class="card-body">
                    <h3 class="mb-4">Ringkasan Pembelian</h3>
                    @php
                        $total_harganya = 0;
                        $total_tiketnya = 0;
                    @endphp
                    @foreach ($pakets as $paket)
                        @php
                            $index = array_search($paket->paket_id, $paketIds);
                            $ticketCount = $index !== false ? $tiketCounts[$index] : 0;
                            $totalPrice = $totalHarga[$paket->paket_id] ?? 0;
                        @endphp
                        @if ($ticketCount > 0)
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h2>{{ $paket->nama_paket }}</h2>
                                </div>
                                <div class="card-body">
                                    <span>Harga : Rp. {{ number_format($paket->harga_paket, 0, ',', '.') }}</span><br>

                                    {{-- Temukan indeks paket_id dalam paketIds --}}
                                    {{-- @php
                                        $index = array_search($paket->paket_id, $paketIds);
                                        $ticketCount = $index !== false ? $tiketCounts[$index] : 0;
                                        $totalPrice = $totalHarga[$paket->paket_id] ?? 0;
                                    @endphp --}}

                                    <span>Jumlah Tiket : {{ $ticketCount }}</span><br>
                                    <span>Total Harga : Rp. {{ number_format($totalPrice, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        @endif


                        @php
                            $total_harganya += $totalPrice;
                            $total_tiketnya += $ticketCount;
                        @endphp
                    @endforeach

                    <div class="total">
                        <span>Total ({{ $total_tiketnya }} tiket)</span>
                        <p class="mt-3">IDR Rp. {{ number_format($total_harganya, 0, ',', '.') }}</p>
                    </div>
                    <p>Ingin mengubah rincian pesanan paket? <a style="display: inline-block" href="/paket/{{ $wisata->wisata_id }}">Klik disini.</a></p>
                    <hr />
                    <h3>Informasi Pembeli</h3>
                    <form action="" method="POST" class="order-form">
                        @csrf
                        <label for="tanggal">Tanggal Pesanan:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required />

                        <label for="name">Nama Pemesan:</label>
                        <input type="text" id="name" name="name" required />

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required />

                        <label for="phone">Nomor Telepon:</label>
                        <input type="text" inputmode="numeric" id="phone" name="phone" required />

                        <label>
                            <input type="checkbox" name="agreement" required />
                            Saya setuju dengan syarat dan ketentuan
                        </label>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Pesan Sekarang
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-black">Tanggal Yang Anda Pilih adalah, {{ now() }}</p>
                                        <p class="text-black">Tiket anda akan dikirim ke {{ now() }} dan
                                            {{ now() }}. Apakah anda yakin untuk melanjutkan?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Kembali
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            Lanjutkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Konfirmasi End -->
@endsection
