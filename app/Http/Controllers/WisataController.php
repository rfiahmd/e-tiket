<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    public function index()
    {
        // Inisialisasi query
        $query = Wisata::query();

        // Ambil data profil admin jika pengguna adalah Admin
        $adminProfile = null;
        if (auth()->user()->role === 'Admin') {
            // Ambil admin profile yang terkait dengan user yang sedang login
            $adminProfile = \App\Models\AdminProfile::where('id_user', auth()->user()->id)->first();

            // Jika admin profile ditemukan, filter wisata berdasarkan id_wisata
            if ($adminProfile) {
                $query->where('wisata_id', $adminProfile->id_wisata);
            }
        }

        // Ambil data wisata
        $wisata = $query->get();

        // Kirim data ke view
        return view('pages.wisata.wisata', compact('wisata', 'adminProfile'));
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('pictures/wisata/deskripsi_wisata'), $fileName);

            $url = asset('pictures/wisata/deskripsi_wisata/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
