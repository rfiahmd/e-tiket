<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\PaketWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua wisata untuk dropdown
        $wisata = Wisata::all();

        // Inisialisasi query
        $query = PaketWisata::query();

        if (auth()->user()->role === 'Admin') {
            // Ambil admin profile yang terkait dengan user yang sedang login
            $adminProfile = \App\Models\AdminProfile::where('id_user', auth()->user()->id)->first();

            // Jika admin profile ditemukan, filter paket wisata berdasarkan id_wisata
            if ($adminProfile) {
                $query->where('id_wisata', $adminProfile->id_wisata);
            }
        } else {
            // Jika bukan Admin (misal Super Admin), ambil semua paket wisata
            $wisata = Wisata::all();
            $query = \App\Models\PaketWisata::query();
        }

        // Filter berdasarkan wisata_filter jika ada
        if ($request->has('wisata_filter') && $request->wisata_filter != 'all') {
            $query->where('id_wisata', $request->wisata_filter);
        }

        // Ambil data paket wisata
        $paketWisata = $query->get();

        return view('pages.paket.paket', compact('paketWisata', 'wisata'));
    }

    public function uploadpkt(Request $request)
    {
        if ($request->hasFile('upload')) {

            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('pictures/wisata/deskripsi_paket'), $fileName);

            $url = asset('pictures/wisata/deskripsi_paket/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function paket_tambah()
    {
        $wisata = Wisata::all();
        return view('pages.paket.paket_tambah', compact('wisata'));
    }

    public function tambah_action(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'wisata' => 'required|exists:wisata,wisata_id',
            'nama_paket' => 'required|string|max:50',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ], [
            'wisata.required' => 'Wisata wajib dipilih.',
            'wisata.exists' => 'Wisata yang dipilih tidak valid.',
            'nama_paket.required' => 'Nama paket wajib diisi.',
            'nama_paket.max' => 'Nama paket maksimal 50 karakter.',
            'harga.required' => 'Harga paket wajib diisi.',
            'harga.numeric' => 'Harga paket harus berupa angka.',
            'harga.min' => 'Harga paket tidak boleh kurang dari 0.',
        ]);

        // Simpan data paket wisata
        $infoPaket = [
            'id_wisata' => $request->wisata,
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ];

        PaketWisata::create($infoPaket);

        // Redirect dengan pesan sukses
        return redirect()->route('paket_wisata')->with('success', 'Paket wisata berhasil ditambahkan.');
    }

    // Method untuk mengedit paket wisata
    public function paket_edit($id)
    {
        $paket = PaketWisata::findOrFail($id);
        $wisata = Wisata::all();
        return view('pages.paket.paket_edit', compact('paket', 'wisata'));
    }

    public function edit_action(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'wisata' => 'required|exists:wisata,wisata_id',
            'nama_paket' => 'required|string|max:50',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ], [
            'wisata.required' => 'Wisata wajib dipilih.',
            'wisata.exists' => 'Wisata yang dipilih tidak valid.',
            'nama_paket.required' => 'Nama paket wajib diisi.',
            'nama_paket.max' => 'Nama paket maksimal 50 karakter.',
            'harga.required' => 'Harga paket wajib diisi.',
            'harga.numeric' => 'Harga paket harus berupa angka.',
            'harga.min' => 'Harga paket tidak boleh kurang dari 0.',
        ]);

        // Update data paket wisata
        $paket = PaketWisata::findOrFail($id);
        $paket->update([
            'id_wisata' => $request->wisata,
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('paket_wisata')->with('success', 'Paket wisata berhasil diperbarui.');
    }

    public function hapus_action($id)
    {
        $paket = PaketWisata::find($id);

        if ($paket) {
            $paket->delete();
            return redirect()->route('paket_wisata')->with('success', 'Paket berhasil dihapus.');
        } else {
            return redirect()->route('paket_wisata')->with('error', 'Paket tidak ditemukan.');
        }
    }
}
