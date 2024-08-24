<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;
use App\Models\Wisata;
use App\Models\Kategori;
use Carbon\Carbon;

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
        $wisata = \App\Models\Wisata::find($id);
        $kategori = \App\Models\Kategori::all();

        return view('landing-page.InformasiTiket.detailwisata', compact('wisata', 'kategori'));
    }

    public function orderStep1(Request $request){
        $validated = $request -> validate([
          'wisata' => 'required',
          'date' => 'required|date',
        ]);

        $request->session()->put('step1', $validated);

        return redirect()->route('step1', ['wisata_id' => $validated['wisata']]);
    }

     public function pilihpkt(Request $request, $id)
    {
        $datastep1 = session('step1');
        if (!$datastep1) {
            $datastep1 = [
                'wisata' => '$id',
                'date' => 'tanggal kosong',
            ];
        }

        $formattedDate = Carbon::parse($datastep1['date'])->locale('id_ID')->isoFormat('dddd, D MMMM YYYY');

        // Dapatkan wisata berdasarkan ID
        $wisata = \App\Models\Wisata::find($datastep1['wisata']);
        // Dapatkan paket yang terkait dengan wisata tersebut
        $paket = \App\Models\PaketWisata::where('id_wisata', $datastep1['wisata'])->get();


        return view('landing-page.InformasiTiket.pilihpaket', compact('paket', 'wisata', 'datastep1', 'formattedDate'));
    }

    public function test(Request $request)
    {
        dd($request->all());
    }
}
