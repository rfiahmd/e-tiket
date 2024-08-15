<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('pages.kategori.kategori');
    }

    public function kategori_tambah()
    {
        return view('pages.kategori.kategori_tambah');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Kategori $kategori)
    {
        //
    }

    public function kategori_edit(Kategori $kategori)
    {
        return view('pages.kategori.kategori_edit');
    }

    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    public function destroy(Kategori $kategori)
    {
        //
    }
}
