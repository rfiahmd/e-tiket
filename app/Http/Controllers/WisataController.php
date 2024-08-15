<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        return view('pages.wisata.wisata');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Wisata $wisata)
    {
        //
    }

    public function edit(Wisata $wisata)
    {
        //
    }

    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    public function destroy(Wisata $wisata)
    {
        //
    }
}
