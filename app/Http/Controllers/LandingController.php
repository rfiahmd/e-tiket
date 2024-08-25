<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use App\Models\PaketWisata;
use App\Models\Wisata;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all();

        return view('landing-page.landing', compact('wisata'));
    }

    public function wisata()
    {
        $wisata = Wisata::all();

        return view('landing-page.InformasiTiket.hargatiket', compact('wisata'));
    }

    public function detail($id)
    {
        $wisata = Wisata::find($id);
        $kategori = Kategori::all();

        return view('landing-page.InformasiTiket.detailwisata', compact('wisata', 'kategori'));
    }

    public function pilihpkt(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        $paket = PaketWisata::where('id_wisata', $id)->get();

        return view('landing-page.InformasiTiket.pilihpaket', compact('paket', 'wisata'));
    }

    // Menampilkan konfirmasi pemesanan
    public function konfirmasi(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        // Mendapatkan array ID paket dan jumlah tiket dari request
        $paketIds = $request->input('id_pkt', []);
        $tiketCounts = $request->input('tiket_count', []);
        
        // Mengambil data paket berdasarkan ID paket
        $pakets = PaketWisata::whereIn('paket_id', $paketIds)->get();

        // Menghitung total harga untuk setiap paket
        $totalHarga = [];
        foreach ($pakets as $paket) {
            $index = array_search($paket->paket_id, $paketIds);
            $count = $tiketCounts[$index] ?? 0;
            $totalHarga[$paket->paket_id] = $paket->harga_paket * $count;
        }

        return view('landing-page.InformasiTiket.konfirmasitiket', compact('wisata','pakets', 'id', 'tiketCounts', 'totalHarga', 'paketIds'));
    }

    // public function test(Request $request)
    // {
    //     dd($request->all());
    // }
}
