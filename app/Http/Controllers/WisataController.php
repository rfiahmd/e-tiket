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
        return view('pages.wisata.wisata');
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
