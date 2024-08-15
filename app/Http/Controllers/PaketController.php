<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('pages.paket.paket'); 
    }

    public function paket_tambah()
    {
        return view('pages.paket.paket_tambah');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Paket $paket)
    {
        //        
    }

    public function paket_edit(Paket $paket)
    {
        return view('pages.paket.paket_edit');
        
    }

    public function update(Request $request, Paket $paket)
    {
        //
    }

    public function destroy(Paket $paket)
    {
        //
    }
}
