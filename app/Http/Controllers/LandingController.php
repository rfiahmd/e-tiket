<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;
use App\Models\Wisata;
use App\Models\Kategori;

class LandingController extends Controller
{
    public function index()
    {
        $wisata = \App\Models\Wisata::all();

        return view('landing-page.landing', compact('wisata'));
    }

    public function wisata()
    {
        $wisata = \App\Models\Wisata::all();

        return view('landing-page.InformasiTiket.hargatiket', compact('wisata'));
    }

    public function detail($id)
    {
        $wisata = \App\Models\Wisata::with('adminProfiles.user')->find($id);
        $kategori = \App\Models\Kategori::all();

        return view('landing-page.InformasiTiket.detailwisata', compact('wisata', 'kategori'));
    }

    public function pilihpkt($id)
    {
        // Dapatkan wisata berdasarkan ID
        $wisata = \App\Models\Wisata::find($id);
        // Dapatkan paket yang terkait dengan wisata tersebut
        $paket = \App\Models\PaketWisata::where('id_wisata', $id)->get();

        return view('landing-page.InformasiTiket.pilihpaket', compact('paket', 'wisata'));
    }
}
