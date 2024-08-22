<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::getAllKategori();

        return view('pages.kategori.kategori', ['kategori' => $kategori]);
    }

    public function tambah_action(Request $request)
    {
        $request->validate(
            [
                'nama_kategori' => 'required|unique:kategori,nama_kategori',
            ],
            [
                'nama_kategori.required' => 'Nama Kategori wajib diisi.',
                'nama_kategori.unique' => 'Kategori telah terdaftar.',
            ]
        );        

        Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit_action(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori = Kategori::find($id);

        if ($kategori) {
            $kategori->update([
                'nama_kategori' => $request->input('nama_kategori'),
            ]);
            return redirect('/kategori')->with('success', 'Kategori berhasil diedit.');
        } else {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    }

    public function hapus_action($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }

        if ($kategori->wisatas()->count() > 0) {
            return redirect('/kategori')->with('error', 'Kategori "' . $kategori->nama_kategori . '" tidak bisa dihapus karena sedang digunakan.');
        }

        $kategori->delete();

        return redirect('/kategori')->with('success', 'Kategori "' . $kategori->nama_kategori . '" berhasil dihapus.');
    }
}
